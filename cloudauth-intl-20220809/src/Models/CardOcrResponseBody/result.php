<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\CardOcrResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $extCardInfo;

    /**
     * @var string
     */
    public $extIdInfo;

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
        'extCardInfo' => 'ExtCardInfo',
        'extIdInfo' => 'ExtIdInfo',
        'passed' => 'Passed',
        'subCode' => 'SubCode',
        'transactionId' => 'TransactionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extCardInfo) {
            $res['ExtCardInfo'] = $this->extCardInfo;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExtCardInfo'])) {
            $model->extCardInfo = $map['ExtCardInfo'];
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
