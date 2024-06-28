<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class DescribeResourceCoverageDetailRequest extends Model
{
    /**
     * @description The ID of the account for which you want to query coverage details. If you do not set this parameter, the data of the current Alibaba Cloud account and its RAM users is queried. To query the data of a RAM user, specify the ID of the RAM user.
     *
     * @example 123745698925000
     *
     * @var int
     */
    public $billOwnerId;

    /**
     * @description The end of the time range to query. The end is excluded from the time range. If you do not set this parameter, the end time is the current time. Specify the time in the format of yyyy-MM-dd HH:mm:ss.
     *
     * @example 2021-01-02 00:00:00
     *
     * @var string
     */
    public $endPeriod;

    /**
     * @description The maximum number of entries to return. Default value: 20. Maximum value: 300.
     *
     * @example 200
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that is used to retrieve the next page of results. You do not need to set this parameter if you query coverage details within a specific time range for the first time. The response returns a token that you can use to query coverage details that are displayed on the next page. If a null value is returned for the NextToken parameter, no more coverage details can be queried.
     *
     * @example eyJwYWdlTnVtIjoyLCJwYWdlU2l6ZSI6MTB9
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The time granularity at which coverage details are queried. Valid values: MONTH, DAY, and HOUR.
     *
     * This parameter is required.
     * @example HOUR
     *
     * @var string
     */
    public $periodType;

    /**
     * @description The type of deduction plans whose coverage details are queried. Valid values: RI and SCU.
     *
     * This parameter is required.
     * @example RI
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The beginning of the time range to query.
     *
     * This parameter is required.
     * @example 2021-01-01 00:00:00
     *
     * @var string
     */
    public $startPeriod;
    protected $_name = [
        'billOwnerId'  => 'BillOwnerId',
        'endPeriod'    => 'EndPeriod',
        'maxResults'   => 'MaxResults',
        'nextToken'    => 'NextToken',
        'periodType'   => 'PeriodType',
        'resourceType' => 'ResourceType',
        'startPeriod'  => 'StartPeriod',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->billOwnerId) {
            $res['BillOwnerId'] = $this->billOwnerId;
        }
        if (null !== $this->endPeriod) {
            $res['EndPeriod'] = $this->endPeriod;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->periodType) {
            $res['PeriodType'] = $this->periodType;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->startPeriod) {
            $res['StartPeriod'] = $this->startPeriod;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeResourceCoverageDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BillOwnerId'])) {
            $model->billOwnerId = $map['BillOwnerId'];
        }
        if (isset($map['EndPeriod'])) {
            $model->endPeriod = $map['EndPeriod'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PeriodType'])) {
            $model->periodType = $map['PeriodType'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['StartPeriod'])) {
            $model->startPeriod = $map['StartPeriod'];
        }

        return $model;
    }
}
