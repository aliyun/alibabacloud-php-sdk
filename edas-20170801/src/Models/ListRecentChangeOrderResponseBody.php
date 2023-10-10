<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListRecentChangeOrderResponseBody\changeOrderList;
use AlibabaCloud\Tea\Model;

class ListRecentChangeOrderResponseBody extends Model
{
    /**
     * @description The information about change processes.
     *
     * @var changeOrderList
     */
    public $changeOrderList;

    /**
     * @description The HTTP status code that is returned.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The additional information that is returned.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example D16979DC-4D42-************
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'changeOrderList' => 'ChangeOrderList',
        'code'            => 'Code',
        'message'         => 'Message',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changeOrderList) {
            $res['ChangeOrderList'] = null !== $this->changeOrderList ? $this->changeOrderList->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
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
     * @return ListRecentChangeOrderResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChangeOrderList'])) {
            $model->changeOrderList = changeOrderList::fromMap($map['ChangeOrderList']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
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
