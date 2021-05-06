<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models;

use AlibabaCloud\Tea\Model;

class UpdateMsgRecallIntervalShrinkRequest extends Model
{
    /**
     * @description 请求
     *
     * @var string
     */
    public $requestParamsShrink;

    /**
     * @description 应用Id
     *
     * @var string
     */
    public $appId;
    protected $_name = [
        'requestParamsShrink' => 'RequestParams',
        'appId'               => 'AppId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestParamsShrink) {
            $res['RequestParams'] = $this->requestParamsShrink;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateMsgRecallIntervalShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestParams'])) {
            $model->requestParamsShrink = $map['RequestParams'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        return $model;
    }
}
