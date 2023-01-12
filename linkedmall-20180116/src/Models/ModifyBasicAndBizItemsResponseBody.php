<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ModifyBasicAndBizItemsResponseBody\failedItemList;
use AlibabaCloud\Tea\Model;

class ModifyBasicAndBizItemsResponseBody extends Model
{
    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $code;

    /**
     * @var failedItemList
     */
    public $failedItemList;

    /**
     * @example The specified parameter %s value is not valid.
     *
     * @var string
     */
    public $message;

    /**
     * @example F957A835-87CE-5E5F-B0A9-A66B081E****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'           => 'Code',
        'failedItemList' => 'FailedItemList',
        'message'        => 'Message',
        'requestId'      => 'RequestId',
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
        if (null !== $this->failedItemList) {
            $res['FailedItemList'] = null !== $this->failedItemList ? $this->failedItemList->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyBasicAndBizItemsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['FailedItemList'])) {
            $model->failedItemList = failedItemList::fromMap($map['FailedItemList']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
