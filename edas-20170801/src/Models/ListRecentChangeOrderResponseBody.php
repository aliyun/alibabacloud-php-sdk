<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListRecentChangeOrderResponseBody\changeOrderList;
use AlibabaCloud\Tea\Model;

class ListRecentChangeOrderResponseBody extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var changeOrderList
     */
    public $changeOrderList;

    /**
     * @var int
     */
    public $code;
    protected $_name = [
        'message'         => 'Message',
        'requestId'       => 'RequestId',
        'changeOrderList' => 'ChangeOrderList',
        'code'            => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->changeOrderList) {
            $res['ChangeOrderList'] = null !== $this->changeOrderList ? $this->changeOrderList->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRecentChangeOrderResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ChangeOrderList'])) {
            $model->changeOrderList = changeOrderList::fromMap($map['ChangeOrderList']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
