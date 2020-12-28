<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Tea\Model;

class ApplyNodesResponseBody extends Model
{
    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $satisfiedAmount;

    /**
     * @var string[]
     */
    public $instanceIds;

    /**
     * @var string
     */
    public $detail;
    protected $_name = [
        'taskId'          => 'TaskId',
        'requestId'       => 'RequestId',
        'satisfiedAmount' => 'SatisfiedAmount',
        'instanceIds'     => 'InstanceIds',
        'detail'          => 'Detail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->satisfiedAmount) {
            $res['SatisfiedAmount'] = $this->satisfiedAmount;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->detail) {
            $res['Detail'] = $this->detail;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ApplyNodesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SatisfiedAmount'])) {
            $model->satisfiedAmount = $map['SatisfiedAmount'];
        }
        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = $map['InstanceIds'];
            }
        }
        if (isset($map['Detail'])) {
            $model->detail = $map['Detail'];
        }

        return $model;
    }
}
