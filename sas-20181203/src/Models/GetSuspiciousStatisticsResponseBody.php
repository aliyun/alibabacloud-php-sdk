<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class GetSuspiciousStatisticsResponseBody extends Model
{
    /**
     * @var int
     */
    public $remindCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $seriousCount;

    /**
     * @var int
     */
    public $suspiciousCount;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'remindCount' => 'RemindCount',
        'requestId' => 'RequestId',
        'seriousCount' => 'SeriousCount',
        'suspiciousCount' => 'SuspiciousCount',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
