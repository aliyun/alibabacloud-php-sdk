<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeNetworkOptimizationSagsResponseBody\smartAccessGateways;

use AlibabaCloud\Tea\Model;

class smartAccessGateway extends Model
{
    /**
     * @var int
     */
    public $endTime;

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
    public $maxBandwidth;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'endTime'      => 'EndTime',
        'state'        => 'State',
        'createTime'   => 'CreateTime',
        'maxBandwidth' => 'MaxBandwidth',
        'instanceId'   => 'InstanceId',
        'name'         => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->maxBandwidth) {
            $res['MaxBandwidth'] = $this->maxBandwidth;
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
     * @return smartAccessGateway
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['MaxBandwidth'])) {
            $model->maxBandwidth = $map['MaxBandwidth'];
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
