<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class DescribeBenchmarkTaskReportRequest extends Model
{
    /**
     * @var string
     */
    public $reportType;
    protected $_name = [
        'reportType' => 'ReportType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reportType) {
            $res['ReportType'] = $this->reportType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBenchmarkTaskReportRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReportType'])) {
            $model->reportType = $map['ReportType'];
        }

        return $model;
    }
}
