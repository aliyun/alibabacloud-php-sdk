<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListNetworkAccessPathsResponseBody;

use AlibabaCloud\Dara\Model;

class networkAccessPaths extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $networkAccessEndpointId;

    /**
     * @var string
     */
    public $networkAccessPathId;

    /**
     * @var string
     */
    public $networkInterfaceId;

    /**
     * @var string
     */
    public $privateIpAddress;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var string
     */
    public $vSwitchId;
    protected $_name = [
        'createTime' => 'CreateTime',
        'instanceId' => 'InstanceId',
        'networkAccessEndpointId' => 'NetworkAccessEndpointId',
        'networkAccessPathId' => 'NetworkAccessPathId',
        'networkInterfaceId' => 'NetworkInterfaceId',
        'privateIpAddress' => 'PrivateIpAddress',
        'status' => 'Status',
        'updateTime' => 'UpdateTime',
        'vSwitchId' => 'VSwitchId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->networkAccessEndpointId) {
            $res['NetworkAccessEndpointId'] = $this->networkAccessEndpointId;
        }

        if (null !== $this->networkAccessPathId) {
            $res['NetworkAccessPathId'] = $this->networkAccessPathId;
        }

        if (null !== $this->networkInterfaceId) {
            $res['NetworkInterfaceId'] = $this->networkInterfaceId;
        }

        if (null !== $this->privateIpAddress) {
            $res['PrivateIpAddress'] = $this->privateIpAddress;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['NetworkAccessEndpointId'])) {
            $model->networkAccessEndpointId = $map['NetworkAccessEndpointId'];
        }

        if (isset($map['NetworkAccessPathId'])) {
            $model->networkAccessPathId = $map['NetworkAccessPathId'];
        }

        if (isset($map['NetworkInterfaceId'])) {
            $model->networkInterfaceId = $map['NetworkInterfaceId'];
        }

        if (isset($map['PrivateIpAddress'])) {
            $model->privateIpAddress = $map['PrivateIpAddress'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        return $model;
    }
}
