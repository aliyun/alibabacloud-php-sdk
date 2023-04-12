<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class StartAggregateConfigRuleEvaluationResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example ABC0FFF8-0B44-40C6-8BBF-3A185EFDD212
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the operation is successful. Valid values:
     *
     *   true: The operation is successful.
     *   false: The operation fails.
     *
     * @example true
     *
     * @var bool
     */
    public $result;
    protected $_name = [
        'requestId' => 'RequestId',
        'result'    => 'Result',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StartAggregateConfigRuleEvaluationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Result'])) {
            $model->result = $map['Result'];
        }

        return $model;
    }
}
