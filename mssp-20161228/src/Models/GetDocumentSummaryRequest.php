<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mssp\V20161228\Models;

use AlibabaCloud\Tea\Model;

class GetDocumentSummaryRequest extends Model
{
    /**
     * @example 1
     *
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
     * @return GetDocumentSummaryRequest
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
