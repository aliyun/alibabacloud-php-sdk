<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class DescribeResponseCodeTrendGraphRequest extends Model
{
    /**
     * @description The end of the time range to query. Unit: seconds. If you do not specify this parameter, the current time is used.
     *
     * @example 1665386280
     *
     * @var string
     */
    public $endTimestamp;

    /**
     * @description The ID of the WAF instance.
     *
     * >  You can call the [DescribeInstance](https://help.aliyun.com/document_detail/433756.html) operation to obtain the ID of the WAF instance.
     *
     * This parameter is required.
     *
     * @example waf_cdnsdf3****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The time interval. Unit: seconds. The value must be an integral multiple of 60.
     *
     * This parameter is required.
     *
     * @example 300
     *
     * @var string
     */
    public $interval;

    /**
     * @description The ID of the region where the WAF instance resides. Valid values:
     *
     *   **cn-hangzhou:** the Chinese mainland.
     *   **ap-southeast-1:** outside the Chinese mainland.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The protected object.
     *
     * @example www.aliyundoc.com
     *
     * @var string
     */
    public $resource;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfm***q
     *
     * @var string
     */
    public $resourceManagerResourceGroupId;

    /**
     * @description The beginning of the time range to query. Unit: seconds.
     *
     * This parameter is required.
     *
     * @example 1665331200
     *
     * @var string
     */
    public $startTimestamp;

    /**
     * @description The type of the error codes. Valid values:
     *
     *   **waf:** error codes that are returned to clients from WAF.
     *   **upstream:** error codes that are returned to WAF from the origin server.
     *
     * This parameter is required.
     *
     * @example waf
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'endTimestamp' => 'EndTimestamp',
        'instanceId' => 'InstanceId',
        'interval' => 'Interval',
        'regionId' => 'RegionId',
        'resource' => 'Resource',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'startTimestamp' => 'StartTimestamp',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTimestamp) {
            $res['EndTimestamp'] = $this->endTimestamp;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }
        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
        }
        if (null !== $this->startTimestamp) {
            $res['StartTimestamp'] = $this->startTimestamp;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeResponseCodeTrendGraphRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTimestamp'])) {
            $model->endTimestamp = $map['EndTimestamp'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }
        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
        }
        if (isset($map['StartTimestamp'])) {
            $model->startTimestamp = $map['StartTimestamp'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
