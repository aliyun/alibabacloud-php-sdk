<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\EkycVerifyResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example {
     * }
     * @var string
     */
    public $extFaceInfo;

    /**
     * @var string
     */
    public $extIdInfo;

    /**
     * @example Y
     *
     * @var string
     */
    public $passed;

    /**
     * @example 205
     *
     * @var string
     */
    public $subCode;

    /**
     * @example 4ab0b***cbde97
     *
     * @var string
     */
    public $transactionId;
    protected $_name = [
        'extFaceInfo'   => 'ExtFaceInfo',
        'extIdInfo'     => 'ExtIdInfo',
        'passed'        => 'Passed',
        'subCode'       => 'SubCode',
        'transactionId' => 'TransactionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extFaceInfo) {
            $res['ExtFaceInfo'] = $this->extFaceInfo;
        }
        if (null !== $this->extIdInfo) {
            $res['ExtIdInfo'] = $this->extIdInfo;
        }
        if (null !== $this->passed) {
            $res['Passed'] = $this->passed;
        }
        if (null !== $this->subCode) {
            $res['SubCode'] = $this->subCode;
        }
        if (null !== $this->transactionId) {
            $res['TransactionId'] = $this->transactionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExtFaceInfo'])) {
            $model->extFaceInfo = $map['ExtFaceInfo'];
        }
        if (isset($map['ExtIdInfo'])) {
            $model->extIdInfo = $map['ExtIdInfo'];
        }
        if (isset($map['Passed'])) {
            $model->passed = $map['Passed'];
        }
        if (isset($map['SubCode'])) {
            $model->subCode = $map['SubCode'];
        }
        if (isset($map['TransactionId'])) {
            $model->transactionId = $map['TransactionId'];
        }

        return $model;
    }
}
