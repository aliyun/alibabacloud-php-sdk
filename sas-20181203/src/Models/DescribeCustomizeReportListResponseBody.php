<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCustomizeReportListResponseBody\reportList;
use AlibabaCloud\Tea\Model;

class DescribeCustomizeReportListResponseBody extends Model
{
    /**
     * @description The reports.
     *
     * @var reportList[]
     */
    public $reportList;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 9FBC6E47-7508-58C9-9E76-528E118CB1CC
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'reportList' => 'ReportList',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reportList) {
            $res['ReportList'] = [];
            if (null !== $this->reportList && \is_array($this->reportList)) {
                $n = 0;
                foreach ($this->reportList as $item) {
                    $res['ReportList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCustomizeReportListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReportList'])) {
            if (!empty($map['ReportList'])) {
                $model->reportList = [];
                $n                 = 0;
                foreach ($map['ReportList'] as $item) {
                    $model->reportList[$n++] = null !== $item ? reportList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
