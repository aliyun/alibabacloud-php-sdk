<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Tea\Model;

class DescribeDiagnosticMetricSetsRequest extends Model
{
    /**
     * @description The maximum number of entries to return on each page. Maximum value: 100.
     *
     * Default value:
     *
     *   If this parameter is left empty, the default value is 10.
     *   If this parameter is set to a value greater than 100, the default value is 100.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The ID of diagnostic metric set N.
     *
     * @var string[]
     */
    public $metricSetIds;

    /**
     * @description The query token. Set the value to the `NextToken` value returned in the last call to the DescribeDiagnosticMetricSets operation. Leave this parameter empty the first time you call this operation.
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
     *   User: user-defined diagnostic metric set
     *   Common: common diagnostic metric set
     *
     * Default value: user.
     * @example User
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'maxResults'   => 'MaxResults',
        'metricSetIds' => 'MetricSetIds',
        'nextToken'    => 'NextToken',
        'regionId'     => 'RegionId',
        'resourceType' => 'ResourceType',
        'type'         => 'Type',
    ];

    public function validate()
    {
    }

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
