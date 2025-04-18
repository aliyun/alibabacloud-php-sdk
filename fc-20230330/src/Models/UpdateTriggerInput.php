<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Dara\Model;

class UpdateTriggerInput extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $invocationRole;

    /**
     * @var string
     */
    public $qualifier;

    /**
     * @var string
     */
    public $triggerConfig;
    protected $_name = [
        'description' => 'description',
        'invocationRole' => 'invocationRole',
        'qualifier' => 'qualifier',
        'triggerConfig' => 'triggerConfig',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->invocationRole) {
            $res['invocationRole'] = $this->invocationRole;
        }

        if (null !== $this->qualifier) {
            $res['qualifier'] = $this->qualifier;
        }

        if (null !== $this->triggerConfig) {
            $res['triggerConfig'] = $this->triggerConfig;
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
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['invocationRole'])) {
            $model->invocationRole = $map['invocationRole'];
        }

        if (isset($map['qualifier'])) {
            $model->qualifier = $map['qualifier'];
        }

        if (isset($map['triggerConfig'])) {
            $model->triggerConfig = $map['triggerConfig'];
        }

        return $model;
    }
}
