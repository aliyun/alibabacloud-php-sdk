<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models;

use AlibabaCloud\SDK\Airec\V20201126\Models\DescribeRuleResponseBody\result;
use AlibabaCloud\Tea\Model;

class DescribeRuleResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example InternalServerError
     *
     * @var string
     */
    public $code;

    /**
     * @description __null__
     *
     * @example An internal server error occurred
     *
     * @var string
     */
    public $message;

    /**
     * @description The error message.
     *
     * @example 8F81A922-6C81-46D6-B78C-CC35E16B1691
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the rule.
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
     * @return DescribeRuleResponseBody
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
