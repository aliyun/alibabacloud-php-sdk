<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models;

use AlibabaCloud\Tea\Model;

class OnsTraceQueryByMsgKeyResponseBody extends Model
{
    /**
     * @description The ID of the query task. You can call the [OnsTraceGetResult](~~59832~~) operation to query the details of the message trace based on the task ID.
     *
     * @example 272967562652883649157096685****
     *
     * @var string
     */
    public $queryId;

    /**
     * @description The ID of the request. This parameter is a common parameter. Each request has a unique ID. You can use this ID to troubleshoot issues.
     *
     * @example F8654231-122A-4DBD-801F-38E35538****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'queryId'   => 'QueryId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->queryId) {
            $res['QueryId'] = $this->queryId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OnsTraceQueryByMsgKeyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QueryId'])) {
            $model->queryId = $map['QueryId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
