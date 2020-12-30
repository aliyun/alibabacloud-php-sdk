<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Tea\Model;

class CheckTransferInFeasibilityResponseBody extends Model
{
    /**
     * @var bool
     */
    public $canTransfer;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $productId;

    /**
     * @var string
     */
    public $code;
    protected $_name = [
        'canTransfer' => 'CanTransfer',
        'message'     => 'Message',
        'requestId'   => 'RequestId',
        'productId'   => 'ProductId',
        'code'        => 'Code',
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
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
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
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
