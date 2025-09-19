<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeCustomizeReportListRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var bool
     */
    public $pinned;

    /**
     * @var int
     */
    public $reportStatus;

    /**
     * @var int
     */
    public $reportType;

    /**
     * @var string
     */
    public $reportVersion;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'lang' => 'Lang',
        'pinned' => 'Pinned',
        'reportStatus' => 'ReportStatus',
        'reportType' => 'ReportType',
        'reportVersion' => 'ReportVersion',
        'title' => 'Title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->pinned) {
            $res['Pinned'] = $this->pinned;
        }

        if (null !== $this->reportStatus) {
            $res['ReportStatus'] = $this->reportStatus;
        }

        if (null !== $this->reportType) {
            $res['ReportType'] = $this->reportType;
        }

        if (null !== $this->reportVersion) {
            $res['ReportVersion'] = $this->reportVersion;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['Pinned'])) {
            $model->pinned = $map['Pinned'];
        }

        if (isset($map['ReportStatus'])) {
            $model->reportStatus = $map['ReportStatus'];
        }

        if (isset($map['ReportType'])) {
            $model->reportType = $map['ReportType'];
        }

        if (isset($map['ReportVersion'])) {
            $model->reportVersion = $map['ReportVersion'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
