<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstanceRequest extends Model
{
    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The region ID of the asset.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $ddosRegionId;

    /**
     * @description The DDoS mitigation status of the asset. Valid values:
     *
     *   **mitigating**: queries assets for which traffic scrubbing is triggered.
     *   **blackholed**: queries assets for which blackhole filtering is triggered.
     *   **normal**: queries assets that are not under DDoS attacks.
     *
     * @example blackholed
     *
     * @var string
     */
    public $ddosStatus;

    /**
     * @description The ID of the asset. The formats of asset IDs vary based on the value of the **InstanceType**. parameter.
     *
     *   If you set **InstanceType** to **ecs**, specify the ID of the ECS instance. For example, you can specify i-bp1cb6x80tfgocid\\*\\*\\*\\*.
     *   If you set **InstanceType** to **slb**, specify the ID of the SLB instance. For example, you can specify alb-vn2dqg3v31y2vd\\*\\*\\*\\*.
     *   If you set **InstanceType** to **eip**, specify the ID of the EIP. For example, you can specify eip-j6ce6dcx9epi7rs46\\*\\*\\*\\*.
     *
     * @example i-bp1cb6x80tfgocid****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The IP address of the asset.
     *
     * @example 121.199.XX.XX
     *
     * @var string
     */
    public $instanceIp;

    /**
     * @description The name of the asset.
     *
     * @example launch-advisor-2022****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The type of the asset. Valid values:
     *
     *   **ecs**: ECS instance
     *   **slb**: SLB instance
     *   **eip**: EIP
     *
     * This parameter is required.
     * @example ecs
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The number of entries to return on each page. Default value: **10**.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'currentPage'  => 'CurrentPage',
        'ddosRegionId' => 'DdosRegionId',
        'ddosStatus'   => 'DdosStatus',
        'instanceId'   => 'InstanceId',
        'instanceIp'   => 'InstanceIp',
        'instanceName' => 'InstanceName',
        'instanceType' => 'InstanceType',
        'pageSize'     => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->ddosRegionId) {
            $res['DdosRegionId'] = $this->ddosRegionId;
        }
        if (null !== $this->ddosStatus) {
            $res['DdosStatus'] = $this->ddosStatus;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceIp) {
            $res['InstanceIp'] = $this->instanceIp;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['DdosRegionId'])) {
            $model->ddosRegionId = $map['DdosRegionId'];
        }
        if (isset($map['DdosStatus'])) {
            $model->ddosStatus = $map['DdosStatus'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceIp'])) {
            $model->instanceIp = $map['InstanceIp'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
