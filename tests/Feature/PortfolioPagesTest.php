<?php

namespace Tests\Feature;

use Tests\TestCase;

class PortfolioPagesTest extends TestCase
{
    public function test_all_four_portfolio_pages_are_accessible(): void
    {
        $this->get(route('home'))->assertOk()
            ->assertSee('Jeramy O.')
            ->assertSee('FIRST-YEAR BSIT STUDENT');
        $this->get(route('profile'))->assertOk()
            ->assertSee('Curious beginner.')
            ->assertSee('Insert School Name');
        $this->get(route('details'))->assertOk()
            ->assertSee('Git and GitHub')
            ->assertSee('TAPTAP Speed Tap Game')
            ->assertSee('Programming Practice');
        $this->get(route('contacts'))->assertOk()
            ->assertSee('Insert Email Address')
            ->assertSee('Toboso, Negros Occidental, Philippines');
    }

    public function test_contact_form_requires_valid_fields(): void
    {
        $this->post(route('contacts.submit'), [])->assertSessionHasErrors([
            'name',
            'email',
            'subject',
            'message',
        ]);
    }

    public function test_valid_contact_form_returns_an_honest_success_message(): void
    {
        $this->followingRedirects()->post(route('contacts.submit'), [
            'name' => 'Taylor Example',
            'email' => 'taylor@example.com',
            'subject' => 'A project question',
            'message' => 'I would like to discuss a project.',
        ])->assertOk()
            ->assertSee('Taylor Example')
            ->assertSee('Your message passed validation.')
            ->assertSee('does not send or store submissions');
    }
}
