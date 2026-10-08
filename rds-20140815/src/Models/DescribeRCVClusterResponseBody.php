<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeRCVClusterResponseBody\mysqlOperator;

class DescribeRCVClusterResponseBody extends Model
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
     * @var mysqlOperator
     */
    public $mysqlOperator;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string[]
     */
    public $supportDiskPerformanceLevel;

    /**
     * @var string
     */
    public $VClusterStatus;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'clusterName' => 'ClusterName',
        'mysqlOperator' => 'MysqlOperator',
        'region' => 'Region',
        'requestId' => 'RequestId',
        'supportDiskPerformanceLevel' => 'SupportDiskPerformanceLevel',
        'VClusterStatus' => 'VClusterStatus',
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

        if (null !== $this->mysqlOperator) {
            $res['MysqlOperator'] = null !== $this->mysqlOperator ? $this->mysqlOperator->toArray($noStream) : $this->mysqlOperator;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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

        if (null !== $this->VClusterStatus) {
            $res['VClusterStatus'] = $this->VClusterStatus;
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

        if (isset($map['MysqlOperator'])) {
            $model->mysqlOperator = mysqlOperator::fromMap($map['MysqlOperator']);
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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

        if (isset($map['VClusterStatus'])) {
            $model->VClusterStatus = $map['VClusterStatus'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
