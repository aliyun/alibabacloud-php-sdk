<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnReportRequest extends Model
{
    /**
     * @example shanghai
     *
     * @var string
     */
    public $area;

    /**
     * @example www.example.com,www.example.org
     *
     * @var string
     */
    public $domainName;

    /**
     * @example 2021-07-02T01:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 2xx
     *
     * @var string
     */
    public $httpCode;

    /**
     * @example 0
     *
     * @var string
     */
    public $isOverseas;

    /**
     * @example 2
     *
     * @var int
     */
    public $reportId;

    /**
     * @example 2021-07-02T00:00:00Z
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
     * @return DescribeDcdnReportRequest
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
        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
