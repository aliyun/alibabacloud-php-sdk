<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models;

use AlibabaCloud\Tea\Model;

class DescribeImageModerationResultRequest extends Model
{
    /**
     * @description The ReqId field returned by the asynchronous Image Moderation 2.0 API.
     *
     * @example B0963D30-BAB4-562F-9ED0-7A23AEC51C7C
     *
     * @var string
     */
    public $reqId;
    protected $_name = [
        'reqId' => 'ReqId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->reqId) {
            $res['ReqId'] = $this->reqId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeImageModerationResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReqId'])) {
            $model->reqId = $map['ReqId'];
        }

        return $model;
    }
}
