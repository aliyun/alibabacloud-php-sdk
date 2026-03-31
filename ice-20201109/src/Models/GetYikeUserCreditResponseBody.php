<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class GetYikeUserCreditResponseBody extends Model
{
    /**
     * @var string
     */
    public $creditTotal;

    /**
     * @var string
     */
    public $creditUsage;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'creditTotal' => 'CreditTotal',
        'creditUsage' => 'CreditUsage',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creditTotal) {
            $res['CreditTotal'] = $this->creditTotal;
        }

        if (null !== $this->creditUsage) {
            $res['CreditUsage'] = $this->creditUsage;
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
        if (isset($map['CreditTotal'])) {
            $model->creditTotal = $map['CreditTotal'];
        }

        if (isset($map['CreditUsage'])) {
            $model->creditUsage = $map['CreditUsage'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
