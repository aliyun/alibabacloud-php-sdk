<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class CheckTransferInFeasibilityResponseBody extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $canTransfer;

    /**
     * @example CheckTransferResult.DomainTransferProhibited
     *
     * @var string
     */
    public $code;

    /**
     * @example This domain name is in transfer prohibited status, so it cannot be transferred. You can contact your original registrar to change its status.
     *
     * @var string
     */
    public $message;

    /**
     * @example 2a
     *
     * @var string
     */
    public $productId;

    /**
     * @example FC0D6B89-2353-4D64-BD80-6606A7DBD7C1
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'canTransfer' => 'CanTransfer',
        'code'        => 'Code',
        'message'     => 'Message',
        'productId'   => 'ProductId',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->canTransfer) {
            $res['CanTransfer'] = $this->canTransfer;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckTransferInFeasibilityResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CanTransfer'])) {
            $model->canTransfer = $map['CanTransfer'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
