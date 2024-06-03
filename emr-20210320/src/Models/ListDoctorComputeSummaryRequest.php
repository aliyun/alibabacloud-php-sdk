<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20210320\Models;

use AlibabaCloud\Tea\Model;

class ListDoctorComputeSummaryRequest extends Model
{
    /**
     * @description The cluster ID.
     *
     * This parameter is required.
     * @example c-b933c5aac8fe****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The resource types, which are used to filter query results. Valid values:
     *
     *   engine: filters results by engine.
     *   queue: filters results by queue.
     *   cluster: displays the results at the cluster level.
     *
     * If you do not specify this parameter, the information at the cluster level is displayed by default. Currently, only one resource type is supported. If you specify multiple resource types, the first resource type is used by default.
     * @example null
     *
     * @var string[]
     */
    public $componentTypes;

    /**
     * @description Specify the date in the ISO 8601 standard. For example, 2023-01-01 represents January 1, 2023.
     *
     * This parameter is required.
     * @example 2023-01-01
     *
     * @var string
     */
    public $dateTime;

    /**
     * @description The maximum number of entries to return on each page.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the request to retrieve a new page of results.
     *
     * @example DD6B1B2A-5837-5237-ABE4-FF0C89568980
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The basis on which you want to sort the query results. Valid values:
     *
     * 14. scoreDayGrowthRatio: the day-to-day growth rate of the score for jobs.
     * @example score
     *
     * @var string
     */
    public $orderBy;

    /**
     * @description The order in which you want to sort the query results. Valid values:
     *
     *   ASC: in ascending order.
     *   DESC: in descending order.
     *
     * @example ASC
     *
     * @var string
     */
    public $orderType;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clusterId'      => 'ClusterId',
        'componentTypes' => 'ComponentTypes',
        'dateTime'       => 'DateTime',
        'maxResults'     => 'MaxResults',
        'nextToken'      => 'NextToken',
        'orderBy'        => 'OrderBy',
        'orderType'      => 'OrderType',
        'regionId'       => 'RegionId',
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
        if (null !== $this->componentTypes) {
            $res['ComponentTypes'] = $this->componentTypes;
        }
        if (null !== $this->dateTime) {
            $res['DateTime'] = $this->dateTime;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDoctorComputeSummaryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ComponentTypes'])) {
            if (!empty($map['ComponentTypes'])) {
                $model->componentTypes = $map['ComponentTypes'];
            }
        }
        if (isset($map['DateTime'])) {
            $model->dateTime = $map['DateTime'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
