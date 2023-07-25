<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnReportListRequest extends Model
{
    /**
     * @description The ID of the operations report that you want to query. If you do not specify an ID, all operations reports are queried.
     *
     * @example 2
     *
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
     * @return DescribeDcdnReportListRequest
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
