<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class DescribeResourceUsageDetailRequest extends Model
{
    /**
     * @example 123745698925000
     *
     * @var int
     */
    public $billOwnerId;

    /**
     * @description The total capacity of deduction plans.
     *
     * @example 2021-01-02 00:00:00
     *
     * @var string
     */
    public $endPeriod;

    /**
     * @description The zone.
     *
     * @example 200
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token of the next page.
     *
     * @example eyJwYWdlTnVtIjoyLCJwYWdlU2l6ZSI6MTB9
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The operating system.
     *
     * @example HOUR
     *
     * @var string
     */
    public $periodType;

    /**
     * @description The status code.
     *
     * @example RI
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The name of the state.
     *
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
     * @return DescribeResourceUsageDetailRequest
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
