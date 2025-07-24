<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models;

use AlibabaCloud\Tea\Model;

class ListServiceInstanceBillRequest extends Model
{
    /**
     * @description The billing cycle. Format: YYYY-MM.
     *
     * This parameter is required.
     *
     * @example 2024-05
     *
     * @var string
     */
    public $billingCycle;

    /**
     * @description The billing date. This parameter is required only if the **Granularity** parameter is set to DAILY. Format: YYYY-MM-DD.
     *
     * @example 2025-04-01
     *
     * @var string
     */
    public $billingDate;

    /**
     * @description The granularity at which bills are queried. Valid values:
     *
     *   MONTHLY: queries bills by month. The data queried is consistent with the data that is displayed for the specified billing cycle on the Billing Details tab of the Bill Details page in User Center.
     *   DAILY: queries bills by day. The data queried is consistent with the data that is displayed for the specified day on the Billing Details tab of the Bill Details page in User Center.
     *
     * You must set the **BillingDate** parameter before you can set the Granularity parameter to DAILY.
     *
     * @example DAILY
     *
     * @var string
     */
    public $granularity;

    /**
     * @description The number of entries page. Valid values: 1 to 100. Default value: 20.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description A pagination token.
     *
     * @example AAAAAVz7BQqj2xtiNSC3d3RAD38=
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The service instance ID.
     *
     * @example si-49793f3bfa034ec6a990
     *
     * @var string
     */
    public $serviceInstanceId;
    protected $_name = [
        'billingCycle' => 'BillingCycle',
        'billingDate' => 'BillingDate',
        'granularity' => 'Granularity',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'serviceInstanceId' => 'ServiceInstanceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->billingCycle) {
            $res['BillingCycle'] = $this->billingCycle;
        }
        if (null !== $this->billingDate) {
            $res['BillingDate'] = $this->billingDate;
        }
        if (null !== $this->granularity) {
            $res['Granularity'] = $this->granularity;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->serviceInstanceId) {
            $res['ServiceInstanceId'] = $this->serviceInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListServiceInstanceBillRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BillingCycle'])) {
            $model->billingCycle = $map['BillingCycle'];
        }
        if (isset($map['BillingDate'])) {
            $model->billingDate = $map['BillingDate'];
        }
        if (isset($map['Granularity'])) {
            $model->granularity = $map['Granularity'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['ServiceInstanceId'])) {
            $model->serviceInstanceId = $map['ServiceInstanceId'];
        }

        return $model;
    }
}
