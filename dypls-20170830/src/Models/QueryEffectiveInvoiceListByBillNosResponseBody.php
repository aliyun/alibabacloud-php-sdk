<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dypls\V20170830\Models;

use AlibabaCloud\SDK\Dypls\V20170830\Models\QueryEffectiveInvoiceListByBillNosResponseBody\returnValue;
use AlibabaCloud\Tea\Model;

class QueryEffectiveInvoiceListByBillNosResponseBody extends Model
{
    /**
     * @var string
     */
    public $errorCode;

    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var bool
     */
    public $isSuccess;

    /**
     * @var returnValue
     */
    public $returnValue;
    protected $_name = [
        'errorCode'    => 'ErrorCode',
        'errorMessage' => 'ErrorMessage',
        'isSuccess'    => 'IsSuccess',
        'returnValue'  => 'ReturnValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }
        if (null !== $this->returnValue) {
            $res['ReturnValue'] = null !== $this->returnValue ? $this->returnValue->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryEffectiveInvoiceListByBillNosResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }
        if (isset($map['ReturnValue'])) {
            $model->returnValue = returnValue::fromMap($map['ReturnValue']);
        }

        return $model;
    }
}
