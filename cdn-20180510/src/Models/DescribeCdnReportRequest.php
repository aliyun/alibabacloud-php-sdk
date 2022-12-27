<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeCdnReportRequest extends Model
{
    /**
     * @description The region. You can call the [DescribeCdnRegionAndIsp](~~91077~~) operation to query the most recent region list.
     *
     *   If you do not specify a region, all regions are queried.
     *   If you specify a region, data in the specified region is returned. You can specify one or more regions. Separate regions with commas (,).
     *
     * @example shanghai
     *
     * @var string
     */
    public $area;

    /**
     * @description The domain names that you want to query. Separate domain names with commas (,).
     *
     * @example www.example1.com,example2.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The end of the time range to query. Specify the time in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * @example 2020-09-17T01:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The HTTP status code. Valid values:
     *
     *   **2xx**: HTTP 2xx status codes
     *   **3xx**: HTTP 3xx status codes
     *   **4xx**: HTTP 4xx status codes
     *   **5xx**: HTTP 5xx status codes
     *
     * If you do not specify an HTTP status code, all HTTP status codes are queried.
     * @example 2xx
     *
     * @var string
     */
    public $httpCode;

    /**
     * @description Specify whether the region is outside the Chinese mainland. Valid values:
     *
     *   **1**: outside the Chinese mainland
     *   **0**: inside the Chinese mainland
     *
     * @example 0
     *
     * @var string
     */
    public $isOverseas;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the operations report that you want to query. You can enter only one ID in each call. You can call the [DescribeCdnSubList](~~271655~~) operation to query the report ID.
     *
     * @example 1
     *
     * @var int
     */
    public $reportId;

    /**
     * @description The beginning of the time range to query. Specify the time in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * @example 2020-09-17T00:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'area'       => 'Area',
        'domainName' => 'DomainName',
        'endTime'    => 'EndTime',
        'httpCode'   => 'HttpCode',
        'isOverseas' => 'IsOverseas',
        'ownerId'    => 'OwnerId',
        'reportId'   => 'ReportId',
        'startTime'  => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->area) {
            $res['Area'] = $this->area;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->httpCode) {
            $res['HttpCode'] = $this->httpCode;
        }
        if (null !== $this->isOverseas) {
            $res['IsOverseas'] = $this->isOverseas;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCdnReportRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Area'])) {
            $model->area = $map['Area'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['HttpCode'])) {
            $model->httpCode = $map['HttpCode'];
        }
        if (isset($map['IsOverseas'])) {
            $model->isOverseas = $map['IsOverseas'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
