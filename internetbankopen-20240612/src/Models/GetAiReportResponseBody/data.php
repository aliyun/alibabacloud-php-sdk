<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\InternetBankOpen\V20240612\Models\GetAiReportResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\InternetBankOpen\V20240612\Models\GetAiReportResponseBody\data\report;

class data extends Model
{
    /**
     * @var report
     */
    public $report;

    /**
     * @var string
     */
    public $reportStatus;
    protected $_name = [
        'report' => 'Report',
        'reportStatus' => 'ReportStatus',
    ];

    public function validate()
    {
        if (null !== $this->report) {
            $this->report->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->report) {
            $res['Report'] = null !== $this->report ? $this->report->toArray($noStream) : $this->report;
        }

        if (null !== $this->reportStatus) {
            $res['ReportStatus'] = $this->reportStatus;
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
        if (isset($map['Report'])) {
            $model->report = report::fromMap($map['Report']);
        }

        if (isset($map['ReportStatus'])) {
            $model->reportStatus = $map['ReportStatus'];
        }

        return $model;
    }
}
