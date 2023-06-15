<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDiagnosticReportListResponseBody\reportList;
use AlibabaCloud\Tea\Model;

class DescribeDiagnosticReportListResponseBody extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example rm-uf6wjk5*****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The details of a diagnostic report.
     *
     * @var reportList[]
     */
    public $reportList;

    /**
     * @description The ID of the request.
     *
     * @example B7E9A79C-DE1B-4398-845F-D654FC0958BD
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'reportList'   => 'ReportList',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
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
     * @return DescribeDiagnosticReportListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
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
