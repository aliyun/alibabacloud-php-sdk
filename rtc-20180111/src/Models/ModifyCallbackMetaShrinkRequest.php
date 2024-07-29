<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Tea\Model;

class ModifyCallbackMetaShrinkRequest extends Model
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

    /**
     * @var int
     */
    public $ownerId;
    protected $_name = [
        'appId'          => 'AppId',
        'callbackShrink' => 'Callback',
        'ownerId'        => 'OwnerId',
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
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyCallbackMetaShrinkRequest
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
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        return $model;
    }
}
