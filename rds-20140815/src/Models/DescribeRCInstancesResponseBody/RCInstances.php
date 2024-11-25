<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCInstancesResponseBody;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCInstancesResponseBody\RCInstances\tagResources;
use AlibabaCloud\Tea\Model;

class RCInstances extends Model
{
    /**
     * @description The cluster name.
     *
     * @example testrdscustom
     *
     * @var string
     */
    public $clusterName;

    /**
     * @var string
     */
    public $createMode;

    /**
     * @description The database type.
     *
     * @example rds_custom
     *
     * @var string
     */
    public $dbType;

    /**
     * @description The instance description.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The time when the task was created. The time is displayed in GMT.
     *
     * @example 2023-03-22 07:56:53.0
     *
     * @var string
     */
    public $gmtCreated;

    /**
     * @description The host IP address.
     *
     * @example 172.30.XXX.XXX
     *
     * @var string
     */
    public $hostIp;

    /**
     * @description The host name.
     *
     * @example i-2zeaiz4g9u23f40m****
     *
     * @var string
     */
    public $hostName;

    /**
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The instance ID.
     *
     * @example rm-2ze704f*****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The instance status. Valid values:
     *
     *   **Pending**
     *   **Running**
     *   **Starting**
     *   **Stopping**
     *   **Stopped**
     *
     * >  If the value returned for the DescribeRCInstances operation is different from the value that is returned for the **DescribeRCInstanceAttribute** operation, the value returned for the **DescribeRCInstanceAttribute** operation shall prevail.
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @var tagResources[]
     */
    public $tagResources;

    /**
     * @description The VPC ID.
     *
     * @example vpc-uf6f7l4fg90****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'clusterName'        => 'ClusterName',
        'createMode'         => 'CreateMode',
        'dbType'             => 'DbType',
        'description'        => 'Description',
        'gmtCreated'         => 'GmtCreated',
        'hostIp'             => 'HostIp',
        'hostName'           => 'HostName',
        'instanceChargeType' => 'InstanceChargeType',
        'instanceId'         => 'InstanceId',
        'regionId'           => 'RegionId',
        'status'             => 'Status',
        'tagResources'       => 'TagResources',
        'vpcId'              => 'VpcId',
        'zoneId'             => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->createMode) {
            $res['CreateMode'] = $this->createMode;
        }
        if (null !== $this->dbType) {
            $res['DbType'] = $this->dbType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->gmtCreated) {
            $res['GmtCreated'] = $this->gmtCreated;
        }
        if (null !== $this->hostIp) {
            $res['HostIp'] = $this->hostIp;
        }
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tagResources) {
            $res['TagResources'] = [];
            if (null !== $this->tagResources && \is_array($this->tagResources)) {
                $n = 0;
                foreach ($this->tagResources as $item) {
                    $res['TagResources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RCInstances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['CreateMode'])) {
            $model->createMode = $map['CreateMode'];
        }
        if (isset($map['DbType'])) {
            $model->dbType = $map['DbType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GmtCreated'])) {
            $model->gmtCreated = $map['GmtCreated'];
        }
        if (isset($map['HostIp'])) {
            $model->hostIp = $map['HostIp'];
        }
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TagResources'])) {
            if (!empty($map['TagResources'])) {
                $model->tagResources = [];
                $n                   = 0;
                foreach ($map['TagResources'] as $item) {
                    $model->tagResources[$n++] = null !== $item ? tagResources::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
