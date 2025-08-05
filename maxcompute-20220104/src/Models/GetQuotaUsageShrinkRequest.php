<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Tea\Model;

class GetQuotaUsageShrinkRequest extends Model
{
    /**
     * @description The aggregation algorithm. For a better page experience, up to 60 points can be displayed for each metric. If you select a time range longer than 1 hour, the chart uses the average value within the range (minutes of the selected time range/60) to aggregate data by default. You can change the aggregation algorithm based on your business requirements.
     *
     * @example max
     *
     * @var string
     */
    public $aggMethod;

    /**
     * @description The time when the query starts. The value is the log time that is specified when log data is written.
     *
     *   The time range that is specified in this operation is a left-closed, right-open interval. The interval includes the start time specified by the **from** parameter, but does not include the end time specified by the **to** parameter. If you set the **from** and **to** parameters to the same value, the time range is invalid and an error message is returned.
     *   This value is a UNIX timestamp representing the number of seconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * This parameter is required.
     *
     * @example 1669081045
     *
     * @var int
     */
    public $from;

    /**
     * @description The types of the charts.
     *
     * @var string
     */
    public $plotTypesShrink;

    /**
     * @description The quota type. Default value: ODPS.
     *
     *   ODPS: computing quota
     *   TUNNEL: Tunnel quota
     *
     * @example ODPS
     *
     * @var string
     */
    public $productId;

    /**
     * @description The region ID.
     *
     * @example cn-chengdu
     *
     * @var string
     */
    public $region;

    /**
     * @description The alias of the level-2 quota.
     *
     * @example ot_tunnel_quota
     *
     * @var string
     */
    public $subQuotaNickname;

    /**
     * @description The ID of the tenant. You can log on to the MaxCompute console, and choose Tenants > Tenant Property from the left-side navigation pane to view the tenant ID.
     *
     * @example 478403690625249
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description The time when the query ends. The value is the log time that is specified when log data is written.
     *
     *   The time range that is specified in this operation is a left-closed, right-open interval. The interval includes the start time specified by the **from** parameter, but does not include the end time specified by the **to** parameter. If you set the **from** and **to** parameters to the same value, the time range is invalid and an error message is returned.
     *   This value is a UNIX timestamp representing the number of seconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * This parameter is required.
     *
     * @example 1669360870
     *
     * @var int
     */
    public $to;

    /**
     * @description The data metric fields.
     *
     * @var string
     */
    public $yAxisTypesShrink;
    protected $_name = [
        'aggMethod' => 'aggMethod',
        'from' => 'from',
        'plotTypesShrink' => 'plotTypes',
        'productId' => 'productId',
        'region' => 'region',
        'subQuotaNickname' => 'subQuotaNickname',
        'tenantId' => 'tenantId',
        'to' => 'to',
        'yAxisTypesShrink' => 'yAxisTypes',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggMethod) {
            $res['aggMethod'] = $this->aggMethod;
        }
        if (null !== $this->from) {
            $res['from'] = $this->from;
        }
        if (null !== $this->plotTypesShrink) {
            $res['plotTypes'] = $this->plotTypesShrink;
        }
        if (null !== $this->productId) {
            $res['productId'] = $this->productId;
        }
        if (null !== $this->region) {
            $res['region'] = $this->region;
        }
        if (null !== $this->subQuotaNickname) {
            $res['subQuotaNickname'] = $this->subQuotaNickname;
        }
        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }
        if (null !== $this->to) {
            $res['to'] = $this->to;
        }
        if (null !== $this->yAxisTypesShrink) {
            $res['yAxisTypes'] = $this->yAxisTypesShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetQuotaUsageShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['aggMethod'])) {
            $model->aggMethod = $map['aggMethod'];
        }
        if (isset($map['from'])) {
            $model->from = $map['from'];
        }
        if (isset($map['plotTypes'])) {
            $model->plotTypesShrink = $map['plotTypes'];
        }
        if (isset($map['productId'])) {
            $model->productId = $map['productId'];
        }
        if (isset($map['region'])) {
            $model->region = $map['region'];
        }
        if (isset($map['subQuotaNickname'])) {
            $model->subQuotaNickname = $map['subQuotaNickname'];
        }
        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }
        if (isset($map['to'])) {
            $model->to = $map['to'];
        }
        if (isset($map['yAxisTypes'])) {
            $model->yAxisTypesShrink = $map['yAxisTypes'];
        }

        return $model;
    }
}
