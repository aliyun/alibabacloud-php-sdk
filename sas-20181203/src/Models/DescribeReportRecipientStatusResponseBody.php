<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeReportRecipientStatusResponseBody\reportRecipientList;

class DescribeReportRecipientStatusResponseBody extends Model
{
    /**
     * @var reportRecipientList[]
     */
    public $reportRecipientList;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'reportRecipientList' => 'ReportRecipientList',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->reportRecipientList)) {
            Model::validateArray($this->reportRecipientList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->reportRecipientList) {
            if (\is_array($this->reportRecipientList)) {
                $res['ReportRecipientList'] = [];
                $n1                         = 0;
                foreach ($this->reportRecipientList as $item1) {
                    $res['ReportRecipientList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ReportRecipientList'])) {
            if (!empty($map['ReportRecipientList'])) {
                $model->reportRecipientList = [];
                $n1                         = 0;
                foreach ($map['ReportRecipientList'] as $item1) {
                    $model->reportRecipientList[$n1++] = reportRecipientList::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
