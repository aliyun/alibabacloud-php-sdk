<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class GetDefenceCountResponseBody extends Model
{
    /**
     * @description The number of handled alerts of the precise defense type in the last 15 days.
     *
     * @example 1
     *
     * @var int
     */
    public $defenceCount15Days;

    /**
     * @description The number of handled alerts of the precision defense type.
     *
     * @example 1
     *
     * @var int
     */
    public $defenceCountTotal;

    /**
     * @description The request ID.
     *
     * @example 89AD16CC-97EE-50F3-9B12-9E28E5C8****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of handled alerts of the web tamper proofing type in the last 15 days.
     *
     * @example 2
     *
     * @var int
     */
    public $tamperProof15Days;

    /**
     * @description The number of handled alerts of the web tamper proofing type.
     *
     * @example 1
     *
     * @var int
     */
    public $tamperProofTotal;
    protected $_name = [
        'defenceCount15Days' => 'DefenceCount15Days',
        'defenceCountTotal'  => 'DefenceCountTotal',
        'requestId'          => 'RequestId',
        'tamperProof15Days'  => 'TamperProof15Days',
        'tamperProofTotal'   => 'TamperProofTotal',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->tamperProof15Days) {
            $res['TamperProof15Days'] = $this->tamperProof15Days;
        }
        if (null !== $this->tamperProofTotal) {
            $res['TamperProofTotal'] = $this->tamperProofTotal;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDefenceCountResponseBody
     */
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
        if (isset($map['TamperProof15Days'])) {
            $model->tamperProof15Days = $map['TamperProof15Days'];
        }
        if (isset($map['TamperProofTotal'])) {
            $model->tamperProofTotal = $map['TamperProofTotal'];
        }

        return $model;
    }
}
