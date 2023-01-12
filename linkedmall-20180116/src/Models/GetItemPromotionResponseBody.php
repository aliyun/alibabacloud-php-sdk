<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\GetItemPromotionResponseBody\itemPromotionModel;
use AlibabaCloud\Tea\Model;

class GetItemPromotionResponseBody extends Model
{
    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $code;

    /**
     * @var itemPromotionModel
     */
    public $itemPromotionModel;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $message;

    /**
     * @example 7152F15C-7298-5531-9A76-2ED2C331****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $subCode;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $subMessage;

    /**
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'               => 'Code',
        'itemPromotionModel' => 'ItemPromotionModel',
        'message'            => 'Message',
        'requestId'          => 'RequestId',
        'subCode'            => 'SubCode',
        'subMessage'         => 'SubMessage',
        'success'            => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->itemPromotionModel) {
            $res['ItemPromotionModel'] = null !== $this->itemPromotionModel ? $this->itemPromotionModel->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->subCode) {
            $res['SubCode'] = $this->subCode;
        }
        if (null !== $this->subMessage) {
            $res['SubMessage'] = $this->subMessage;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetItemPromotionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ItemPromotionModel'])) {
            $model->itemPromotionModel = itemPromotionModel::fromMap($map['ItemPromotionModel']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SubCode'])) {
            $model->subCode = $map['SubCode'];
        }
        if (isset($map['SubMessage'])) {
            $model->subMessage = $map['SubMessage'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
