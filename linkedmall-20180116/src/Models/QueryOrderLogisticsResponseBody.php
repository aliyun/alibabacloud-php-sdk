<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryOrderLogisticsResponseBody\orderLogistics;
use AlibabaCloud\Tea\Model;

class QueryOrderLogisticsResponseBody extends Model
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
     * @var string
     */
    public $code;

    /**
     * @var orderLogistics
     */
    public $orderLogistics;
    protected $_name = [
        'message'        => 'Message',
        'requestId'      => 'RequestId',
        'code'           => 'Code',
        'orderLogistics' => 'OrderLogistics',
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
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->orderLogistics) {
            $res['OrderLogistics'] = null !== $this->orderLogistics ? $this->orderLogistics->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryOrderLogisticsResponseBody
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['OrderLogistics'])) {
            $model->orderLogistics = orderLogistics::fromMap($map['OrderLogistics']);
        }

        return $model;
    }
}
