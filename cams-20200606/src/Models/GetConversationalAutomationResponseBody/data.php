<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\GetConversationalAutomationResponseBody;

use AlibabaCloud\SDK\Cams\V20200606\Models\GetConversationalAutomationResponseBody\data\commands;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var commands[]
     */
    public $commands;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableWelcomeMessage;

    /**
     * @example 86138****
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @var string[]
     */
    public $prompts;
    protected $_name = [
        'commands'             => 'Commands',
        'enableWelcomeMessage' => 'EnableWelcomeMessage',
        'phoneNumber'          => 'PhoneNumber',
        'prompts'              => 'Prompts',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commands) {
            $res['Commands'] = [];
            if (null !== $this->commands && \is_array($this->commands)) {
                $n = 0;
                foreach ($this->commands as $item) {
                    $res['Commands'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['Prompts'] = $this->prompts;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Commands'])) {
            if (!empty($map['Commands'])) {
                $model->commands = [];
                $n               = 0;
                foreach ($map['Commands'] as $item) {
                    $model->commands[$n++] = null !== $item ? commands::fromMap($item) : $item;
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
                $model->prompts = $map['Prompts'];
            }
        }

        return $model;
    }
}
