<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetInstanceGroupInspectReportDetailResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $reportDetail;

    /**
     * @var string
     */
    public $reportId;
    protected $_name = [
        'reportDetail' => 'ReportDetail',
        'reportId' => 'ReportId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->reportDetail) {
            $res['ReportDetail'] = $this->reportDetail;
        }

        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
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
        if (isset($map['ReportDetail'])) {
            $model->reportDetail = $map['ReportDetail'];
        }

        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }

        return $model;
    }
}
