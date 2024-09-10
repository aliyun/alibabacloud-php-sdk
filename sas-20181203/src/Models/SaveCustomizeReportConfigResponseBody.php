<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class SaveCustomizeReportConfigResponseBody extends Model
{
    /**
     * @description The ID of the report.
     *
     * @example 123
     *
     * @var int
     */
    public $reportId;

    /**
     * @description The request ID.
     *
     * @example 11472B29-1A1C-5D7F-944B-7CD84319****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'reportId'  => 'ReportId',
        'requestId' => 'RequestId',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SaveCustomizeReportConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
