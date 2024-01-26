<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20190522\Models;

use AlibabaCloud\Tea\Model;

class GetAliwareReportRequest extends Model
{
    /**
     * @var int
     */
    public $reportId;
    protected $_name = [
        'reportId' => 'ReportId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAliwareReportRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }

        return $model;
    }
}
