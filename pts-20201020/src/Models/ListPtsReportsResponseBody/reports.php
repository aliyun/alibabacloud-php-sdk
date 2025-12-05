<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\ListPtsReportsResponseBody;

use AlibabaCloud\Dara\Model;

class reports extends Model
{
    /**
     * @var int
     */
    public $actualStartTime;

    /**
     * @var string
     */
    public $duration;

    /**
     * @var string
     */
    public $reportId;

    /**
     * @var string
     */
    public $reportName;

    /**
     * @var int
     */
    public $vum;
    protected $_name = [
        'actualStartTime' => 'ActualStartTime',
        'duration' => 'Duration',
        'reportId' => 'ReportId',
        'reportName' => 'ReportName',
        'vum' => 'Vum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->actualStartTime) {
            $res['ActualStartTime'] = $this->actualStartTime;
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
        }

        if (null !== $this->reportName) {
            $res['ReportName'] = $this->reportName;
        }

        if (null !== $this->vum) {
            $res['Vum'] = $this->vum;
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
        if (isset($map['ActualStartTime'])) {
            $model->actualStartTime = $map['ActualStartTime'];
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }

        if (isset($map['ReportName'])) {
            $model->reportName = $map['ReportName'];
        }

        if (isset($map['Vum'])) {
            $model->vum = $map['Vum'];
        }

        return $model;
    }
}
