<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class CancelStackOperationRequest extends Model
{
    /**
     * @description test
     *
     * @var string[]
     */
    public $allowedStackOperations;

    /**
     * @example Safe
     *
     * @var string
     */
    public $cancelType;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 4a6c9851-3b0f-4f5f-b4ca-a14bf691****
     *
     * @var string
     */
    public $stackId;
    protected $_name = [
        'allowedStackOperations' => 'AllowedStackOperations',
        'cancelType'             => 'CancelType',
        'regionId'               => 'RegionId',
        'stackId'                => 'StackId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowedStackOperations) {
            $res['AllowedStackOperations'] = $this->allowedStackOperations;
        }
        if (null !== $this->cancelType) {
            $res['CancelType'] = $this->cancelType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->stackId) {
            $res['StackId'] = $this->stackId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CancelStackOperationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowedStackOperations'])) {
            if (!empty($map['AllowedStackOperations'])) {
                $model->allowedStackOperations = $map['AllowedStackOperations'];
            }
        }
        if (isset($map['CancelType'])) {
            $model->cancelType = $map['CancelType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StackId'])) {
            $model->stackId = $map['StackId'];
        }

        return $model;
    }
}
