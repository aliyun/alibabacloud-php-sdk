<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models;

use AlibabaCloud\SDK\Airec\V20201126\Models\CreateRankingModelResponseBody\result;
use AlibabaCloud\Tea\Model;

class CreateRankingModelResponseBody extends Model
{
    /**
     * @example 1
     *
     * @var string
     */
    public $code;

    /**
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @example 829F38F6-E2D6-4109-90A6-888160BD16C2
     *
     * @var string
     */
    public $requestId;

    /**
     * @description result info
     *
     * @var result
     */
    public $result;
    protected $_name = [
        'code'      => 'code',
        'message'   => 'message',
        'requestId' => 'requestId',
        'result'    => 'result',
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
            $res['result'] = null !== $this->result ? $this->result->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRankingModelResponseBody
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
            $model->result = result::fromMap($map['result']);
        }

        return $model;
    }
}
