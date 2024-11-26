<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class DescribeSensitiveOutboundStatisticRequest extends Model
{
    /**
     * @description The ID of the hybrid cloud cluster.
     * >For hybrid cloud scenarios only, you can call the [DescribeHybridCloudClusters](https://help.aliyun.com/document_detail/2849376.html) operation to query the hybrid cloud clusters.
     * @example 428
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The evaluation result. Valid values:
     *
     *   **report**: Risks exist in cross-border data transfer.
     *   **none**: No risks exist in cross-border data transfer.
     *
     * @example report
     *
     * @var string
     */
    public $detectionResult;

    /**
     * @description The end of the time range to query. The value is a UNIX timestamp displayed in UTC. Unit: seconds.
     *
     * >  You can query only data of the previous month, previous 3 months, previous 6 months, previous 12 months, and data generated since January 1 of last year for compliance check. You must specify a valid time range.
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
     * @description The name of the sorting field. Valid values:
     *
     *   **total_count** (default): total number of data entries
     *   **outbound_count**: total number of data entries that are transferred across borders
     *
     * @example total_count
     *
     * @var string
     */
    public $orderKey;

    /**
     * @description The sorting method. Valid values:
     *
     *   **desc** (default): in descending order
     *   **asc**: in ascending order
     *
     * @example desc
     *
     * @var string
     */
    public $orderWay;

    /**
     * @description The page number. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Default value: **10**.
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
     * @example rg-acfm***q
     *
     * @var string
     */
    public $resourceManagerResourceGroupId;

    /**
     * @description The type of the sensitive data. Separate multiple types with commas (,).
     *
     * >  You can call the [DescribeApisecRules](https://help.aliyun.com/document_detail/2859155.html) operation to query the supported types of sensitive data. Only built-in types of sensitive data are supported for this operation.
     * @example 1000,1001
     *
     * @var string
     */
    public $sensitiveCode;

    /**
     * @description The sensitivity level. Valid values:
     *
     *   **high**
     *   **medium**
     *   **low**
     *
     * @example high
     *
     * @var string
     */
    public $sensitiveLevel;

    /**
     * @description The type of the information. Valid values:
     *
     *   **info** (default): full personal information
     *   **sensitive**: sensitive personal information
     *
     * @example info
     *
     * @var string
     */
    public $sensitiveType;

    /**
     * @description The beginning of the time range to query. The value is a UNIX timestamp displayed in UTC. Unit: seconds.
     *
     * >  You can query only data of the previous month, previous 3 months, previous 6 months, previous 12 months, and data generated since January 1 of last year for compliance check. You must specify a valid time range.
     * @example 1672502400
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'clusterId'                      => 'ClusterId',
        'detectionResult'                => 'DetectionResult',
        'endTime'                        => 'EndTime',
        'instanceId'                     => 'InstanceId',
        'orderKey'                       => 'OrderKey',
        'orderWay'                       => 'OrderWay',
        'pageNumber'                     => 'PageNumber',
        'pageSize'                       => 'PageSize',
        'regionId'                       => 'RegionId',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'sensitiveCode'                  => 'SensitiveCode',
        'sensitiveLevel'                 => 'SensitiveLevel',
        'sensitiveType'                  => 'SensitiveType',
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
        if (null !== $this->detectionResult) {
            $res['DetectionResult'] = $this->detectionResult;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->orderKey) {
            $res['OrderKey'] = $this->orderKey;
        }
        if (null !== $this->orderWay) {
            $res['OrderWay'] = $this->orderWay;
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
        if (null !== $this->sensitiveLevel) {
            $res['SensitiveLevel'] = $this->sensitiveLevel;
        }
        if (null !== $this->sensitiveType) {
            $res['SensitiveType'] = $this->sensitiveType;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSensitiveOutboundStatisticRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DetectionResult'])) {
            $model->detectionResult = $map['DetectionResult'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OrderKey'])) {
            $model->orderKey = $map['OrderKey'];
        }
        if (isset($map['OrderWay'])) {
            $model->orderWay = $map['OrderWay'];
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
        if (isset($map['SensitiveLevel'])) {
            $model->sensitiveLevel = $map['SensitiveLevel'];
        }
        if (isset($map['SensitiveType'])) {
            $model->sensitiveType = $map['SensitiveType'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
