<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\GetConversationalAutomationResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cams\V20200606\Models\GetConversationalAutomationResponseBody\data\commands;

class data extends Model
{
    /**
     * @var commands[]
     */
    public $commands;

    /**
     * @var bool
     */
    public $enableWelcomeMessage;

    /**
     * @var string
     */
    public $phoneNumber;

    /**
     * @var string[]
     */
    public $prompts;
    protected $_name = [
        'commands' => 'Commands',
        'enableWelcomeMessage' => 'EnableWelcomeMessage',
        'phoneNumber' => 'PhoneNumber',
        'prompts' => 'Prompts',
    ];

    public function validate()
    {
        if (\is_array($this->commands)) {
            Model::validateArray($this->commands);
        }
        if (\is_array($this->prompts)) {
            Model::validateArray($this->prompts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commands) {
            if (\is_array($this->commands)) {
                $res['Commands'] = [];
                $n1 = 0;
                foreach ($this->commands as $item1) {
                    $res['Commands'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->enableWelcomeMessage) {
            $res['EnableWelcomeMessage'] = $this->enableWelcomeMessage;
        }

        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }

        if (null !== $this->prompts) {
            if (\is_array($this->prompts)) {
                $res['Prompts'] = [];
                $n1 = 0;
                foreach ($this->prompts as $item1) {
                    $res['Prompts'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Commands'])) {
            if (!empty($map['Commands'])) {
                $model->commands = [];
                $n1 = 0;
                foreach ($map['Commands'] as $item1) {
                    $model->commands[$n1] = commands::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['EnableWelcomeMessage'])) {
            $model->enableWelcomeMessage = $map['EnableWelcomeMessage'];
        }

        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }

        if (isset($map['Prompts'])) {
            if (!empty($map['Prompts'])) {
                $model->prompts = [];
                $n1 = 0;
                foreach ($map['Prompts'] as $item1) {
                    $model->prompts[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
