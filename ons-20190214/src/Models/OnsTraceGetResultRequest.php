<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models;

use AlibabaCloud\Tea\Model;

class OnsTraceGetResultRequest extends Model
{
    /**
     * @description The ID of the task that was created to query the trace of the message.
     *
     * @example 272967562652883649157096685****
     *
     * @var string
     */
    public $queryId;
    protected $_name = [
        'queryId' => 'QueryId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OnsTraceGetResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['QueryId'])) {
            $model->queryId = $map['QueryId'];
        }

        return $model;
    }
}
