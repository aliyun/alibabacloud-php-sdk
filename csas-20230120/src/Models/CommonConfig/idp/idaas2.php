<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\CommonConfig\idp;

use AlibabaCloud\Dara\Model;

class idaas2 extends Model
{
    /**
     * @var string
     */
    public $eventCallbackBase;

    /**
     * @var string
     */
    public $eventLabel;
    protected $_name = [
        'eventCallbackBase' => 'EventCallbackBase',
        'eventLabel' => 'EventLabel',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventCallbackBase) {
            $res['EventCallbackBase'] = $this->eventCallbackBase;
        }

        if (null !== $this->eventLabel) {
            $res['EventLabel'] = $this->eventLabel;
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
        if (isset($map['EventCallbackBase'])) {
            $model->eventCallbackBase = $map['EventCallbackBase'];
        }

        if (isset($map['EventLabel'])) {
            $model->eventLabel = $map['EventLabel'];
        }

        return $model;
    }
}
