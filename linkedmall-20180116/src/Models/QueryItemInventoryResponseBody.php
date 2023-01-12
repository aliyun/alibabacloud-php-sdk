<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryItemInventoryResponseBody\itemList;
use AlibabaCloud\Tea\Model;

class QueryItemInventoryResponseBody extends Model
{
    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $code;

    /**
     * @var itemList
     */
    public $itemList;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $message;

    /**
     * @example 1F2E68C6-FD20-5121-89FF-65F555EE1F15
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
     * @example True
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'       => 'Code',
        'itemList'   => 'ItemList',
        'message'    => 'Message',
        'requestId'  => 'RequestId',
        'subCode'    => 'SubCode',
        'subMessage' => 'SubMessage',
        'success'    => 'Success',
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
        if (null !== $this->itemList) {
            $res['ItemList'] = null !== $this->itemList ? $this->itemList->toMap() : null;
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
     * @return QueryItemInventoryResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ItemList'])) {
            $model->itemList = itemList::fromMap($map['ItemList']);
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
