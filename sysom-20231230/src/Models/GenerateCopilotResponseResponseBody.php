<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models;

use AlibabaCloud\Tea\Model;

class GenerateCopilotResponseResponseBody extends Model
{
    /**
     * @example SysomOpenAPI.ServerError
     *
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $data;

    /**
     * @example Requests for llm service failed
     *
     * @var string
     */
    public $massage;

    /**
     * @description Id of the request
     *
     * @example 2D693121-C925-5154-8DF6-C09A8B369822
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'      => 'code',
        'data'      => 'data',
        'massage'   => 'massage',
        'requestId' => 'requestId',
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
        if (null !== $this->data) {
            $res['data'] = $this->data;
        }
        if (null !== $this->massage) {
            $res['massage'] = $this->massage;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateCopilotResponseResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['data'])) {
            $model->data = $map['data'];
        }
        if (isset($map['massage'])) {
            $model->massage = $map['massage'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
