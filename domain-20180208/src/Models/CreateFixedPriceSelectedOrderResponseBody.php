<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models;

use AlibabaCloud\SDK\Domain\V20180208\Models\CreateFixedPriceSelectedOrderResponseBody\module;
use AlibabaCloud\Tea\Model;

class CreateFixedPriceSelectedOrderResponseBody extends Model
{
    /**
     * @example DomainNotOnSale
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @var module
     */
    public $module;

    /**
     * @example C50E41A0-09F1-4491-8DB8-AF55BD2D0CC8
     *
     * @var string
     */
    public $requestId;

    /**
     * @example True
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'errorCode'      => 'ErrorCode',
        'httpStatusCode' => 'HttpStatusCode',
        'module'         => 'Module',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
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
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }
        if (null !== $this->module) {
            $res['Module'] = null !== $this->module ? $this->module->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFixedPriceSelectedOrderResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }
        if (isset($map['Module'])) {
            $model->module = module::fromMap($map['Module']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
