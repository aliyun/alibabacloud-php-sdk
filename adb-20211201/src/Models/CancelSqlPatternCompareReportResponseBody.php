<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

class CancelSqlPatternCompareReportResponseBody extends Model
{
    /**
     * @var string
     */
    public $cancelTime;

    /**
     * @var bool
     */
    public $canceled;

    /**
     * @var int
     */
    public $reportId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'cancelTime' => 'CancelTime',
        'canceled' => 'Canceled',
        'reportId' => 'ReportId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cancelTime) {
            $res['CancelTime'] = $this->cancelTime;
        }

        if (null !== $this->canceled) {
            $res['Canceled'] = $this->canceled;
        }

        if (null !== $this->reportId) {
            $res['ReportId'] = $this->reportId;
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
        if (isset($map['CancelTime'])) {
            $model->cancelTime = $map['CancelTime'];
        }

        if (isset($map['Canceled'])) {
            $model->canceled = $map['Canceled'];
        }

        if (isset($map['ReportId'])) {
            $model->reportId = $map['ReportId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
