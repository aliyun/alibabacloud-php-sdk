<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\ListRCVClustersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\ListRCVClustersResponseBody\VClusters\mysqlOperator;

class VClusters extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var int
     */
    public $instanceCount;

    /**
     * @var mysqlOperator
     */
    public $mysqlOperator;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string[]
     */
    public $supportDiskPerformanceLevel;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'clusterName' => 'ClusterName',
        'instanceCount' => 'InstanceCount',
        'mysqlOperator' => 'MysqlOperator',
        'regionId' => 'RegionId',
        'status' => 'Status',
        'supportDiskPerformanceLevel' => 'SupportDiskPerformanceLevel',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        if (null !== $this->mysqlOperator) {
            $this->mysqlOperator->validate();
        }
        if (\is_array($this->supportDiskPerformanceLevel)) {
            Model::validateArray($this->supportDiskPerformanceLevel);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }

        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }

        if (null !== $this->mysqlOperator) {
            $res['MysqlOperator'] = null !== $this->mysqlOperator ? $this->mysqlOperator->toArray($noStream) : $this->mysqlOperator;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->supportDiskPerformanceLevel) {
            if (\is_array($this->supportDiskPerformanceLevel)) {
                $res['SupportDiskPerformanceLevel'] = [];
                $n1 = 0;
                foreach ($this->supportDiskPerformanceLevel as $item1) {
                    $res['SupportDiskPerformanceLevel'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }

        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
        }

        if (isset($map['MysqlOperator'])) {
            $model->mysqlOperator = mysqlOperator::fromMap($map['MysqlOperator']);
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SupportDiskPerformanceLevel'])) {
            if (!empty($map['SupportDiskPerformanceLevel'])) {
                $model->supportDiskPerformanceLevel = [];
                $n1 = 0;
                foreach ($map['SupportDiskPerformanceLevel'] as $item1) {
                    $model->supportDiskPerformanceLevel[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
