<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Tea\Model;

class CreateStackGroupResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 14A07460-EBE7-47CA-9757-12CC4761D47A
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the stack group.
     *
     * @example 2c036e78-9e82-428e-afd6-177f5d04****
     *
     * @var string
     */
    public $stackGroupId;
    protected $_name = [
        'requestId'    => 'RequestId',
        'stackGroupId' => 'StackGroupId',
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
        if (null !== $this->stackGroupId) {
            $res['StackGroupId'] = $this->stackGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateStackGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StackGroupId'])) {
            $model->stackGroupId = $map['StackGroupId'];
        }

        return $model;
    }
}
