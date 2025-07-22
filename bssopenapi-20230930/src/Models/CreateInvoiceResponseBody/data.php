<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\CreateInvoiceResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1990699401005016
     *
     * @var int
     */
    public $accountId;

    /**
     * @example 0.01
     *
     * @var string
     */
    public $amount;

    /**
     * @example 1001
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example ALIYUN_SERVICE
     *
     * @var string
     */
    public $invoiceIssuer;

    /**
     * @var string
     */
    public $message;
    protected $_name = [
        'accountId' => 'AccountId',
        'amount' => 'Amount',
        'errorCode' => 'ErrorCode',
        'invoiceIssuer' => 'InvoiceIssuer',
        'message' => 'Message',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->invoiceIssuer) {
            $res['InvoiceIssuer'] = $this->invoiceIssuer;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['InvoiceIssuer'])) {
            $model->invoiceIssuer = $map['InvoiceIssuer'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        return $model;
    }
}
