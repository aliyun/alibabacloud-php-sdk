<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class DescribeDiagnosticMetricSetsRequest extends Model
{
    /**
     * @description The number of entries per page. Valid values: 1 to 100.
     *
     * Default value:
     *
     *   If this parameter is left empty, the default value is 10.
     *   If you set this parameter to a value that is greater than 100, the default value is 100.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The IDs of diagnostic metric sets.
     *
     * @var string[]
     */
    public $metricSetIds;

    /**
     * @description The pagination token that is used in the request to retrieve a new page of results. You do not need to specify this parameter for the first request. You must specify the token that is obtained from the previous query as the value of `NextToken`.
     *
     * @example caeba0bbb2be03f84eb48b699f0a4883
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The region ID of the diagnostic metric set. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/25609.html) operation to query the most recent region list.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource type supported by the diagnostic metric set.
     *
     * @example instance
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The type of the diagnostic metric set. Valid values:
     *
     *   User: custom diagnostic metric set
     *   Common: public diagnostic metric set
     *
     * Default value: User.
     *
     * @example User
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'maxResults' => 'MaxResults',
        'metricSetIds' => 'MetricSetIds',
        'nextToken' => 'NextToken',
        'regionId' => 'RegionId',
        'resourceType' => 'ResourceType',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->metricSetIds) {
            $res['MetricSetIds'] = $this->metricSetIds;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDiagnosticMetricSetsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['MetricSetIds'])) {
            if (!empty($map['MetricSetIds'])) {
                $model->metricSetIds = $map['MetricSetIds'];
            }
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
