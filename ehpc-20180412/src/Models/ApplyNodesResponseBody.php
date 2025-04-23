<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ApplyNodesResponseBody\instanceIds;

class ApplyNodesResponseBody extends Model
{
    /**
     * @var string
     */
    public $detail;

    /**
     * @var instanceIds
     */
    public $instanceIds;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $satisfiedAmount;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'detail' => 'Detail',
        'instanceIds' => 'InstanceIds',
        'requestId' => 'RequestId',
        'satisfiedAmount' => 'SatisfiedAmount',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        if (null !== $this->instanceIds) {
            $this->instanceIds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }

        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = null !== $this->instanceIds ? $this->instanceIds->toArray($noStream) : $this->instanceIds;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->satisfiedAmount) {
            $res['SatisfiedAmount'] = $this->satisfiedAmount;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }

        if (isset($map['InstanceIds'])) {
            $model->instanceIds = instanceIds::fromMap($map['InstanceIds']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SatisfiedAmount'])) {
            $model->satisfiedAmount = $map['SatisfiedAmount'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
