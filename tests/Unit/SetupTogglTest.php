<?php

namespace Tests\Unit;

use Tests\TestCase;
use Godbout\Alfred\Time\Menus\Entrance;
use Godbout\Alfred\Workflow\ScriptFilter;

class SetupTogglTest extends TestCase
{

    /** @test */
    public function it_sets_the_toggl_enabled_argument_to_true_if_the_user_enables_toggl()
    {
        $this->disableToggl();

        $output = $this->reachTogglSetupMenu();

        $this->assertStringContainsString('"toggl_enabled":"true"', $output);
    }

    /** @test */
    public function it_sets_the_toggl_enabled_argument_to_false_if_the_user_disables_toggl()
    {
        $this->enableToggl();

        $output = $this->reachTogglSetupMenu();

        $this->assertStringContainsString('"toggl_enabled":"false"', $output);
    }
}
