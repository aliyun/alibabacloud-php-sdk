<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCInstancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCInstancesResponseBody\RCInstances\tagResources;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCInstancesResponseBody\RCInstances\tags;

class RCInstances extends Model
{
    /**
     * @var string
     */
    public $clusterName;
    /**
     * @var string
     */
    public $createMode;
    /**
     * @var string
     */
    public $dbType;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $gmtCreated;
    /**
     * @var string
     */
    public $hostIp;
    /**
     * @var string
     */
    public $hostName;
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
    public $regionId;
    /**
     * @var string
     */
    public $spotStrategy;
    /**
     * @var string
     */
    public $status;
    /**
     * @var tagResources[]
     */
    public $tagResources;
    /**
     * @var tags[]
     */
    public $tags;
    /**
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
        'spotStrategy'       => 'SpotStrategy',
        'status'             => 'Status',
        'tagResources'       => 'TagResources',
        'tags'               => 'Tags',
        'vpcId'              => 'VpcId',
        'zoneId'             => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->tagResources)) {
            Model::validateArray($this->tagResources);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->spotStrategy) {
            $res['SpotStrategy'] = $this->spotStrategy;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->tagResources) {
            if (\is_array($this->tagResources)) {
                $res['TagResources'] = [];
                $n1                  = 0;
                foreach ($this->tagResources as $item1) {
                    $res['TagResources'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1          = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['SpotStrategy'])) {
            $model->spotStrategy = $map['SpotStrategy'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TagResources'])) {
            if (!empty($map['TagResources'])) {
                $model->tagResources = [];
                $n1                  = 0;
                foreach ($map['TagResources'] as $item1) {
                    $model->tagResources[$n1++] = tagResources::fromMap($item1);
                }
            }
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1          = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = tags::fromMap($item1);
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
