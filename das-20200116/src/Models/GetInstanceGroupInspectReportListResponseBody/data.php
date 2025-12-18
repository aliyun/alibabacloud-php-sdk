<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetInstanceGroupInspectReportListResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $reportDate;

    /**
     * @var string
     */
    public $reportId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'createTime' => 'CreateTime',
        'reportDate' => 'ReportDate',
        'reportId' => 'ReportId',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->reportDate) {
            $res['ReportDate'] = $this->reportDate;
        }

        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['ReportDate'])) {
            $model->reportDate = $map['ReportDate'];
        }

        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
