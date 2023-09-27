<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class SavepointStatus extends Model
{
    /**
     * @var SavepointFailure
     */
    public $failure;

    /**
     * @example COMPLETED
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'failure' => 'failure',
        'state'   => 'state',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->failure) {
            $res['failure'] = null !== $this->failure ? $this->failure->toMap() : null;
        }
        if (null !== $this->state) {
            $res['state'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SavepointStatus
     */
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
