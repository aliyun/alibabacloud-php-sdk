<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class SavepointStatus extends Model
{
    /**
     * @var SavepointFailure
     */
    public $failure;

    /**
     * @var string
     */
    public $state;
    protected $_name = [
        'failure' => 'failure',
        'state' => 'state',
    ];

    public function validate()
    {
        if (null !== $this->failure) {
            $this->failure->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->failure) {
            $res['failure'] = null !== $this->failure ? $this->failure->toArray($noStream) : $this->failure;
        }

        if (null !== $this->state) {
            $res['state'] = $this->state;
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
        if (isset($map['failure'])) {
            $model->failure = SavepointFailure::fromMap($map['failure']);
        }

        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        return $model;
    }
}
