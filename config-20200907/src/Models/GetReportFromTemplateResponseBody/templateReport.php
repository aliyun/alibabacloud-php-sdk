<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\GetReportFromTemplateResponseBody;

use AlibabaCloud\Dara\Model;

class templateReport extends Model
{
    /**
     * @var int
     */
    public $accountId;

    /**
     * @var int
     */
    public $reportCreateEndTimestamp;

    /**
     * @var int
     */
    public $reportCreateStartTimestamp;

    /**
     * @var string
     */
    public $reportTemplateId;

    /**
     * @var string
     */
    public $reportUrl;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $templateReportId;
    protected $_name = [
        'accountId' => 'AccountId',
        'reportCreateEndTimestamp' => 'ReportCreateEndTimestamp',
        'reportCreateStartTimestamp' => 'ReportCreateStartTimestamp',
        'reportTemplateId' => 'ReportTemplateId',
        'reportUrl' => 'ReportUrl',
        'status' => 'Status',
        'templateReportId' => 'TemplateReportId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }

        if (null !== $this->reportCreateEndTimestamp) {
            $res['ReportCreateEndTimestamp'] = $this->reportCreateEndTimestamp;
        }

        if (null !== $this->reportCreateStartTimestamp) {
            $res['ReportCreateStartTimestamp'] = $this->reportCreateStartTimestamp;
        }

        if (null !== $this->reportTemplateId) {
            $res['ReportTemplateId'] = $this->reportTemplateId;
        }

        if (null !== $this->reportUrl) {
            $res['ReportUrl'] = $this->reportUrl;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->templateReportId) {
            $res['TemplateReportId'] = $this->templateReportId;
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
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }

        if (isset($map['ReportCreateEndTimestamp'])) {
            $model->reportCreateEndTimestamp = $map['ReportCreateEndTimestamp'];
        }

        if (isset($map['ReportCreateStartTimestamp'])) {
            $model->reportCreateStartTimestamp = $map['ReportCreateStartTimestamp'];
        }

        if (isset($map['ReportTemplateId'])) {
            $model->reportTemplateId = $map['ReportTemplateId'];
        }

        if (isset($map['ReportUrl'])) {
            $model->reportUrl = $map['ReportUrl'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TemplateReportId'])) {
            $model->templateReportId = $map['TemplateReportId'];
        }

        return $model;
    }
}
