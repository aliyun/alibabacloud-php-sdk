<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeNetworkOptimizationsResponseBody\networkOptimizations;

use AlibabaCloud\Tea\Model;

class networkOptimization extends Model
{
    /**
     * @var int
     */
    public $sagCount;

    /**
     * @var string
     */
    public $state;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $ccnId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'sagCount'   => 'SagCount',
        'state'      => 'State',
        'createTime' => 'CreateTime',
        'ccnId'      => 'CcnId',
        'instanceId' => 'InstanceId',
        'name'       => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sagCount) {
            $res['SagCount'] = $this->sagCount;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->ccnId) {
            $res['CcnId'] = $this->ccnId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkOptimization
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SagCount'])) {
            $model->sagCount = $map['SagCount'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CcnId'])) {
            $model->ccnId = $map['CcnId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
