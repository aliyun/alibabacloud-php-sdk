<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\SDK\Edas\V20170801\Models\GetChangeOrderInfoResponseBody\changeOrderInfo;
use AlibabaCloud\Tea\Model;

class GetChangeOrderInfoResponseBody extends Model
{
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
     * @example 4JFR-FV9F***************
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The details about the change process.
     *
     * @var changeOrderInfo
     */
    public $changeOrderInfo;
    protected $_name = [
        'code'            => 'Code',
        'message'         => 'Message',
        'requestId'       => 'RequestId',
        'changeOrderInfo' => 'changeOrderInfo',
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
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->changeOrderInfo) {
            $res['changeOrderInfo'] = null !== $this->changeOrderInfo ? $this->changeOrderInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetChangeOrderInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['changeOrderInfo'])) {
            $model->changeOrderInfo = changeOrderInfo::fromMap($map['changeOrderInfo']);
        }

        return $model;
    }
}
