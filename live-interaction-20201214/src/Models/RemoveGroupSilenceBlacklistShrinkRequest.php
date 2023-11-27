<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models;

use AlibabaCloud\Tea\Model;

class RemoveGroupSilenceBlacklistShrinkRequest extends Model
{
    /**
     * @example apitest
     *
     * @var string
     */
    public $appId;

    /**
     * @example apitest
     *
     * @var string
     */
    public $requestParamsShrink;
    protected $_name = [
        'appId'               => 'AppId',
        'requestParamsShrink' => 'RequestParams',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->requestParamsShrink) {
            $res['RequestParams'] = $this->requestParamsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveGroupSilenceBlacklistShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['RequestParams'])) {
            $model->requestParamsShrink = $map['RequestParams'];
        }

        return $model;
    }
}
