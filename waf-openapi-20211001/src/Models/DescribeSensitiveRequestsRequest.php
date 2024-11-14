<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class DescribeSensitiveRequestsRequest extends Model
{
    /**
     * @description The ID of the hybrid cloud cluster.
     * >For hybrid cloud scenarios only, you can call the [DescribeHybridCloudClusters](https://help.aliyun.com/document_detail/2849376.html) operation to query the hybrid cloud clusters.
     * @example 269
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The end of the time range to query. The value is a UNIX timestamp displayed in UTC. Unit: seconds.
     *
     * @example 1725966000
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The ID of the WAF instance.
     *
     * This parameter is required.
     * @example waf-cn-0xldbqt****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The page number. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region in which the Web Application Firewall (WAF) instance is deployed. Valid values:
     *
     *   **cn-hangzhou**: Chinese mainland
     *   **ap-southeast-1**: outside the Chinese mainland
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the Alibaba Cloud resource group.
     *
     * @example rg-aekzwwkpn****5i
     *
     * @var string
     */
    public $resourceManagerResourceGroupId;

    /**
     * @description The type of the sensitive data.
     *
     * >  You can call the [DescribeApisecRules](~~DescribeApisecRules~~) operation to query the supported types of sensitive data.
     * @example 1001
     *
     * @var int
     */
    public $sensitiveCode;

    /**
     * @description The sensitive data.
     *
     * @example card
     *
     * @var string
     */
    public $sensitiveData;

    /**
     * @description The beginning of the time range to query. The value is a UNIX timestamp displayed in UTC. Unit: seconds.
     *
     * @example 1723392000
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'clusterId'                      => 'ClusterId',
        'endTime'                        => 'EndTime',
        'instanceId'                     => 'InstanceId',
        'pageNumber'                     => 'PageNumber',
        'pageSize'                       => 'PageSize',
        'regionId'                       => 'RegionId',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'sensitiveCode'                  => 'SensitiveCode',
        'sensitiveData'                  => 'SensitiveData',
        'startTime'                      => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
        }
        if (null !== $this->sensitiveCode) {
            $res['SensitiveCode'] = $this->sensitiveCode;
        }
        if (null !== $this->sensitiveData) {
            $res['SensitiveData'] = $this->sensitiveData;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSensitiveRequestsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
        }
        if (isset($map['SensitiveCode'])) {
            $model->sensitiveCode = $map['SensitiveCode'];
        }
        if (isset($map['SensitiveData'])) {
            $model->sensitiveData = $map['SensitiveData'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
