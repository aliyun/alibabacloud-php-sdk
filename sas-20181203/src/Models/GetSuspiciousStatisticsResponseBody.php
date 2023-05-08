<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetSuspiciousStatisticsResponseBody extends Model
{
    /**
     * @description The number of alerts whose Emergency level is Reminder.
     *
     * @example 0
     *
     * @var int
     */
    public $remindCount;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 84092B42-1A59-4F34-8DF8-1D93520990A5
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of alerts whose Emergency level is Urgent.
     *
     * @example 1
     *
     * @var int
     */
    public $seriousCount;

    /**
     * @description The number of alerts whose Emergency level is Suspicious.
     *
     * @example 8
     *
     * @var int
     */
    public $suspiciousCount;

    /**
     * @description The total number of alerts.
     *
     * @example 9
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'remindCount'     => 'RemindCount',
        'requestId'       => 'RequestId',
        'seriousCount'    => 'SeriousCount',
        'suspiciousCount' => 'SuspiciousCount',
        'totalCount'      => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->remindCount) {
            $res['RemindCount'] = $this->remindCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->seriousCount) {
            $res['SeriousCount'] = $this->seriousCount;
        }
        if (null !== $this->suspiciousCount) {
            $res['SuspiciousCount'] = $this->suspiciousCount;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSuspiciousStatisticsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RemindCount'])) {
            $model->remindCount = $map['RemindCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SeriousCount'])) {
            $model->seriousCount = $map['SeriousCount'];
        }
        if (isset($map['SuspiciousCount'])) {
            $model->suspiciousCount = $map['SuspiciousCount'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
