<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeCustomizeReportListResponseBody\reportList;

class DescribeCustomizeReportListResponseBody extends Model
{
    /**
     * @var reportList[]
     */
    public $reportList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'reportList' => 'ReportList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->reportList)) {
            Model::validateArray($this->reportList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->reportList) {
            if (\is_array($this->reportList)) {
                $res['ReportList'] = [];
                $n1 = 0;
                foreach ($this->reportList as $item1) {
                    $res['ReportList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ReportList'])) {
            if (!empty($map['ReportList'])) {
                $model->reportList = [];
                $n1 = 0;
                foreach ($map['ReportList'] as $item1) {
                    $model->reportList[$n1] = reportList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
