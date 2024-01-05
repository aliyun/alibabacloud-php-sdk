<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Igraph\V20210621\Models;

use AlibabaCloud\Tea\Model;

class SearchIgraphDemoResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var mixed[]
     */
    public $result;

    /**
     * @var int
     */
    public $returnTimeMs;
    protected $_name = [
        'code'         => 'code',
        'message'      => 'message',
        'requestId'    => 'requestId',
        'result'       => 'result',
        'returnTimeMs' => 'returnTimeMs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->result) {
            $res['result'] = $this->result;
        }
        if (null !== $this->returnTimeMs) {
            $res['returnTimeMs'] = $this->returnTimeMs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchIgraphDemoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['result'])) {
            $model->result = $map['result'];
        }
        if (isset($map['returnTimeMs'])) {
            $model->returnTimeMs = $map['returnTimeMs'];
        }

        return $model;
    }
}
