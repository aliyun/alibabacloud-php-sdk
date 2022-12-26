<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Tea\Model;

class CreateConnQuestionResponseBody extends Model
{
    /**
     * @example 1000002123
     *
     * @var int
     */
    public $outlineId;

    /**
     * @example C191B48B-9268-4FB1-A3C2-5143B4A91D0C
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'outlineId' => 'OutlineId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->outlineId) {
            $res['OutlineId'] = $this->outlineId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateConnQuestionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OutlineId'])) {
            $model->outlineId = $map['OutlineId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
