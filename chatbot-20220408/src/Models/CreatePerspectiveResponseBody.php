<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models;

use AlibabaCloud\Tea\Model;

class CreatePerspectiveResponseBody extends Model
{
    /**
     * @example 3001
     *
     * @var string
     */
    public $perspectiveId;

    /**
     * @example F285D735-D580-18A8-B97F-B2E72B00F101
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'perspectiveId' => 'PerspectiveId',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->perspectiveId) {
            $res['PerspectiveId'] = $this->perspectiveId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePerspectiveResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PerspectiveId'])) {
            $model->perspectiveId = $map['PerspectiveId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
