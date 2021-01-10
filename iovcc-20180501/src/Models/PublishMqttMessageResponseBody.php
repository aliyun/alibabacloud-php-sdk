<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class PublishMqttMessageResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $mid;
    protected $_name = [
        'requestId' => 'RequestId',
        'mid'       => 'Mid',
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
        if (null !== $this->mid) {
            $res['Mid'] = $this->mid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PublishMqttMessageResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Mid'])) {
            $model->mid = $map['Mid'];
        }

        return $model;
    }
}
