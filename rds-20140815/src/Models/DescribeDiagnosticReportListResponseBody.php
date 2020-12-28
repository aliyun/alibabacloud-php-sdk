<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDiagnosticReportListResponseBody\reportList;
use AlibabaCloud\Tea\Model;

class DescribeDiagnosticReportListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var reportList[]
     */
    public $reportList;
    protected $_name = [
        'requestId'  => 'RequestId',
        'reportList' => 'ReportList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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

        return $model;
    }
}
