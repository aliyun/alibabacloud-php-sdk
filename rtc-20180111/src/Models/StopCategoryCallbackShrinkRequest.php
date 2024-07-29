<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Tea\Model;

class StopCategoryCallbackShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 223***JQb
     *
     * @var string
     */
    public $appId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $callbackShrink;
    protected $_name = [
        'appId'          => 'AppId',
        'callbackShrink' => 'Callback',
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
        if (null !== $this->callbackShrink) {
            $res['Callback'] = $this->callbackShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopCategoryCallbackShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Callback'])) {
            $model->callbackShrink = $map['Callback'];
        }

        return $model;
    }
}
