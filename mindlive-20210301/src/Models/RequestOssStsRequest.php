<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MindLive\V20210301\Models;

use AlibabaCloud\Tea\Model;

class RequestOssStsRequest extends Model
{
    /**
     * @var string
     */
    public $appCode;

    /**
     * @var int
     */
    public $expireSeconds;
    protected $_name = [
        'appCode'       => 'AppCode',
        'expireSeconds' => 'ExpireSeconds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }
        if (null !== $this->expireSeconds) {
            $res['ExpireSeconds'] = $this->expireSeconds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RequestOssStsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }
        if (isset($map['ExpireSeconds'])) {
            $model->expireSeconds = $map['ExpireSeconds'];
        }

        return $model;
    }
}
