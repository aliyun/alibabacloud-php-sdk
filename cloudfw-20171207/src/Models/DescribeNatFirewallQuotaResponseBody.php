<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeNatFirewallQuotaResponseBody extends Model
{
    /**
     * @var int
     */
    public $exceptionCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $unprotectedCount;

    /**
     * @var int
     */
    public $usedCount;
    protected $_name = [
        'exceptionCount' => 'ExceptionCount',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
        'unprotectedCount' => 'UnprotectedCount',
        'usedCount' => 'UsedCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->exceptionCount) {
            $res['ExceptionCount'] = $this->exceptionCount;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->unprotectedCount) {
            $res['UnprotectedCount'] = $this->unprotectedCount;
        }

        if (null !== $this->usedCount) {
            $res['UsedCount'] = $this->usedCount;
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
        if (isset($map['ExceptionCount'])) {
            $model->exceptionCount = $map['ExceptionCount'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['UnprotectedCount'])) {
            $model->unprotectedCount = $map['UnprotectedCount'];
        }

        if (isset($map['UsedCount'])) {
            $model->usedCount = $map['UsedCount'];
        }

        return $model;
    }
}
