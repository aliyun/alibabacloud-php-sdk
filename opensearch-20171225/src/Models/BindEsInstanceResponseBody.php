<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class BindEsInstanceResponseBody extends Model
{
    /**
     * @example F5099063-6B86-F398-D843-905F9EFB683A
     *
     * @var string
     */
    public $requestId;

    /**
     * @example {}
     *
     * @var mixed[]
     */
    public $result;
    protected $_name = [
        'requestId' => 'requestId',
        'result'    => 'result',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->result) {
            $res['result'] = $this->result;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BindEsInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['result'])) {
            $model->result = $map['result'];
        }

        return $model;
    }
}
