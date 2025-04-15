<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\FaceLivenessResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\FaceLivenessResponseBody\result\extFaceInfo;

class result extends Model
{
    /**
     * @var extFaceInfo
     */
    public $extFaceInfo;

    /**
     * @var string
     */
    public $passed;

    /**
     * @var string
     */
    public $subCode;

    /**
     * @var string
     */
    public $transactionId;
    protected $_name = [
        'extFaceInfo' => 'ExtFaceInfo',
        'passed' => 'Passed',
        'subCode' => 'SubCode',
        'transactionId' => 'TransactionId',
    ];

    public function validate()
    {
        if (null !== $this->extFaceInfo) {
            $this->extFaceInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extFaceInfo) {
            $res['ExtFaceInfo'] = null !== $this->extFaceInfo ? $this->extFaceInfo->toArray($noStream) : $this->extFaceInfo;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExtFaceInfo'])) {
            $model->extFaceInfo = extFaceInfo::fromMap($map['ExtFaceInfo']);
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
