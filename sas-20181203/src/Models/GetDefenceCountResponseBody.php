<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class GetDefenceCountResponseBody extends Model
{
    /**
     * @var int
     */
    public $defenceCount15Days;

    /**
     * @var int
     */
    public $defenceCountTotal;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $suspiciousDealtCount;

    /**
     * @var int
     */
    public $tamperProof15Days;

    /**
     * @var int
     */
    public $tamperProofTotal;
    protected $_name = [
        'defenceCount15Days' => 'DefenceCount15Days',
        'defenceCountTotal' => 'DefenceCountTotal',
        'requestId' => 'RequestId',
        'suspiciousDealtCount' => 'SuspiciousDealtCount',
        'tamperProof15Days' => 'TamperProof15Days',
        'tamperProofTotal' => 'TamperProofTotal',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defenceCount15Days) {
            $res['DefenceCount15Days'] = $this->defenceCount15Days;
        }

        if (null !== $this->defenceCountTotal) {
            $res['DefenceCountTotal'] = $this->defenceCountTotal;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->suspiciousDealtCount) {
            $res['SuspiciousDealtCount'] = $this->suspiciousDealtCount;
        }

        if (null !== $this->tamperProof15Days) {
            $res['TamperProof15Days'] = $this->tamperProof15Days;
        }

        if (null !== $this->tamperProofTotal) {
            $res['TamperProofTotal'] = $this->tamperProofTotal;
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
        if (isset($map['DefenceCount15Days'])) {
            $model->defenceCount15Days = $map['DefenceCount15Days'];
        }

        if (isset($map['DefenceCountTotal'])) {
            $model->defenceCountTotal = $map['DefenceCountTotal'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SuspiciousDealtCount'])) {
            $model->suspiciousDealtCount = $map['SuspiciousDealtCount'];
        }

        if (isset($map['TamperProof15Days'])) {
            $model->tamperProof15Days = $map['TamperProof15Days'];
        }

        if (isset($map['TamperProofTotal'])) {
            $model->tamperProofTotal = $map['TamperProofTotal'];
        }

        return $model;
    }
}
