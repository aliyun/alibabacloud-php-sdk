<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Quickbipublic\V20220101\Models;

use AlibabaCloud\Tea\Model;

class QueryShareListRequest extends Model
{
    /**
     * @description The type of work being shared. Valid values:
     *
     *   product: BI portal
     *   dashboard: dashboard
     *   worksheet: workbook
     *   dashboardOfflineQuery: self-service data retrieval
     *   Analysis: Ad hoc analysis
     *   DATAFORM
     *   SCREEN: Data dashboard
     *
     * @example 6b407e50-e774-406b-9956-da2425c2****
     *
     * @var string
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
     * @return QueryShareListRequest
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
