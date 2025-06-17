<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Dara\Model;

class DescribeCdnReportRequest extends Model
{
    /**
     * @var string
     */
    public $area;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $httpCode;

    /**
     * @var string
     */
    public $isOverseas;

    /**
     * @var int
     */
    public $reportId;

    /**
     * @var string
     */
    public $startTime;
    protected $_name = [
        'area' => 'Area',
        'domainName' => 'DomainName',
        'endTime' => 'EndTime',
        'httpCode' => 'HttpCode',
        'isOverseas' => 'IsOverseas',
        'reportId' => 'ReportId',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
