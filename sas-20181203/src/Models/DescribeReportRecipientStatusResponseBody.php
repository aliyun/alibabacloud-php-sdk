<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeReportRecipientStatusResponseBody\reportRecipientList;
use AlibabaCloud\Tea\Model;

class DescribeReportRecipientStatusResponseBody extends Model
{
    /**
     * @description The report recipients.
     *
     * @var reportRecipientList[]
     */
    public $reportRecipientList;

    /**
     * @description The request ID.
     *
     * @example D65AADFC-1D20-5A6A-8F6A-9FA53C0DC1F8
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'reportRecipientList' => 'ReportRecipientList',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->reportRecipientList) {
            $res['ReportRecipientList'] = [];
            if (null !== $this->reportRecipientList && \is_array($this->reportRecipientList)) {
                $n = 0;
                foreach ($this->reportRecipientList as $item) {
                    $res['ReportRecipientList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeReportRecipientStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReportRecipientList'])) {
            if (!empty($map['ReportRecipientList'])) {
                $model->reportRecipientList = [];
                $n = 0;
                foreach ($map['ReportRecipientList'] as $item) {
                    $model->reportRecipientList[$n++] = null !== $item ? reportRecipientList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
