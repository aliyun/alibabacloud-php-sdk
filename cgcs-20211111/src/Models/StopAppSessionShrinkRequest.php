<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\Tea\Model;

class StopAppSessionShrinkRequest extends Model
{
    /**
     * @example 1ADE0XXXX
     *
     * @var string
     */
    public $customSessionId;

    /**
     * @example 100XXXX
     *
     * @var string
     */
    public $platformSessionId;

    /**
     * @description 停止容器参数。此参数将透传到Agent。
     *
     * @var string
     */
    public $stopParamShrink;
    protected $_name = [
        'customSessionId'   => 'CustomSessionId',
        'platformSessionId' => 'PlatformSessionId',
        'stopParamShrink'   => 'StopParam',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customSessionId) {
            $res['CustomSessionId'] = $this->customSessionId;
        }
        if (null !== $this->platformSessionId) {
            $res['PlatformSessionId'] = $this->platformSessionId;
        }
        if (null !== $this->stopParamShrink) {
            $res['StopParam'] = $this->stopParamShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopAppSessionShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomSessionId'])) {
            $model->customSessionId = $map['CustomSessionId'];
        }
        if (isset($map['PlatformSessionId'])) {
            $model->platformSessionId = $map['PlatformSessionId'];
        }
        if (isset($map['StopParam'])) {
            $model->stopParamShrink = $map['StopParam'];
        }

        return $model;
    }
}
