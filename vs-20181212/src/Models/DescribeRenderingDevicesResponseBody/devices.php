<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRenderingDevicesResponseBody;

use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRenderingDevicesResponseBody\devices\ipInfos;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeRenderingDevicesResponseBody\devices\podInfos;
use AlibabaCloud\Tea\Model;

class devices extends Model
{
    /**
     * @var bool
     */
    public $autoRenew;

    /**
     * @var int
     */
    public $autoRenewPeriod;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $edgeNodeName;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $instanceChargeType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var ipInfos[]
     */
    public $ipInfos;

    /**
     * @var string
     */
    public $macAddress;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @var string
     */
    public $platformType;

    /**
     * @var podInfos[]
     */
    public $podInfos;

    /**
     * @var string
     */
    public $serverName;

    /**
     * @var string
     */
    public $specification;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'autoRenew'          => 'AutoRenew',
        'autoRenewPeriod'    => 'AutoRenewPeriod',
        'clusterId'          => 'ClusterId',
        'description'        => 'Description',
        'edgeNodeName'       => 'EdgeNodeName',
        'imageId'            => 'ImageId',
        'instanceChargeType' => 'InstanceChargeType',
        'instanceId'         => 'InstanceId',
        'instanceName'       => 'InstanceName',
        'ipInfos'            => 'IpInfos',
        'macAddress'         => 'MacAddress',
        'period'             => 'Period',
        'periodUnit'         => 'PeriodUnit',
        'platformType'       => 'PlatformType',
        'podInfos'           => 'PodInfos',
        'serverName'         => 'ServerName',
        'specification'      => 'Specification',
        'status'             => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->autoRenewPeriod) {
            $res['AutoRenewPeriod'] = $this->autoRenewPeriod;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->edgeNodeName) {
            $res['EdgeNodeName'] = $this->edgeNodeName;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->ipInfos) {
            $res['IpInfos'] = [];
            if (null !== $this->ipInfos && \is_array($this->ipInfos)) {
                $n = 0;
                foreach ($this->ipInfos as $item) {
                    $res['IpInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->macAddress) {
            $res['MacAddress'] = $this->macAddress;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->platformType) {
            $res['PlatformType'] = $this->platformType;
        }
        if (null !== $this->podInfos) {
            $res['PodInfos'] = [];
            if (null !== $this->podInfos && \is_array($this->podInfos)) {
                $n = 0;
                foreach ($this->podInfos as $item) {
                    $res['PodInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->serverName) {
            $res['ServerName'] = $this->serverName;
        }
        if (null !== $this->specification) {
            $res['Specification'] = $this->specification;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return devices
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['AutoRenewPeriod'])) {
            $model->autoRenewPeriod = $map['AutoRenewPeriod'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EdgeNodeName'])) {
            $model->edgeNodeName = $map['EdgeNodeName'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['IpInfos'])) {
            if (!empty($map['IpInfos'])) {
                $model->ipInfos = [];
                $n              = 0;
                foreach ($map['IpInfos'] as $item) {
                    $model->ipInfos[$n++] = null !== $item ? ipInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MacAddress'])) {
            $model->macAddress = $map['MacAddress'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['PlatformType'])) {
            $model->platformType = $map['PlatformType'];
        }
        if (isset($map['PodInfos'])) {
            if (!empty($map['PodInfos'])) {
                $model->podInfos = [];
                $n               = 0;
                foreach ($map['PodInfos'] as $item) {
                    $model->podInfos[$n++] = null !== $item ? podInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ServerName'])) {
            $model->serverName = $map['ServerName'];
        }
        if (isset($map['Specification'])) {
            $model->specification = $map['Specification'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
