<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\GetScheduledTaskPushOptionsResponseBody\channels;

use AlibabaCloud\Dara\Model;

class methods extends Model
{
    /**
     * @var string
     */
    public $disabledReason;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $method;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'disabledReason' => 'disabledReason',
        'enabled' => 'enabled',
        'method' => 'method',
        'name' => 'name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->disabledReason) {
            $res['disabledReason'] = $this->disabledReason;
        }

        if (null !== $this->enabled) {
            $res['enabled'] = $this->enabled;
        }

        if (null !== $this->method) {
            $res['method'] = $this->method;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['disabledReason'])) {
            $model->disabledReason = $map['disabledReason'];
        }

        if (isset($map['enabled'])) {
            $model->enabled = $map['enabled'];
        }

        if (isset($map['method'])) {
            $model->method = $map['method'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
