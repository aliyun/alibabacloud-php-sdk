<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yike\V20260319\Models;

use AlibabaCloud\Dara\Model;

class GetYikeJobCreditResponseBody extends Model
{
    /**
     * @var string
     */
    public $creditStatus;

    /**
     * @var float
     */
    public $jobCreditCost;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'creditStatus' => 'CreditStatus',
        'jobCreditCost' => 'JobCreditCost',
        'jobId' => 'JobId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creditStatus) {
            $res['CreditStatus'] = $this->creditStatus;
        }

        if (null !== $this->jobCreditCost) {
            $res['JobCreditCost'] = $this->jobCreditCost;
        }

        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
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
        if (isset($map['CreditStatus'])) {
            $model->creditStatus = $map['CreditStatus'];
        }

        if (isset($map['JobCreditCost'])) {
            $model->jobCreditCost = $map['JobCreditCost'];
        }

        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
