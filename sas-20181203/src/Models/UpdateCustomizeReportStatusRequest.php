<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class UpdateCustomizeReportStatusRequest extends Model
{
    /**
     * @var int
     */
    public $pinnedTime;
    /**
     * @var int
     */
    public $reportId;
    /**
     * @var int
     */
    public $reportStatus;
    protected $_name = [
        'pinnedTime'   => 'PinnedTime',
        'reportId'     => 'ReportId',
        'reportStatus' => 'ReportStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pinnedTime) {
            $res['PinnedTime'] = $this->pinnedTime;
        }

        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
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
        if (isset($map['PinnedTime'])) {
            $model->pinnedTime = $map['PinnedTime'];
        }

        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }

        if (isset($map['ReportStatus'])) {
            $model->reportStatus = $map['ReportStatus'];
        }

        return $model;
    }
}
