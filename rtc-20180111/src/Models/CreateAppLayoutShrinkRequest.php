<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Tea\Model;

class CreateAppLayoutShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example ac7N****
     *
     * @var string
     */
    public $appId;

    /**
     * @example 53200b81-b761-4c10-842a-a0726d97xxxx
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $layoutShrink;
    protected $_name = [
        'appId' => 'AppId',
        'clientToken' => 'ClientToken',
        'layoutShrink' => 'Layout',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->layoutShrink) {
            $res['Layout'] = $this->layoutShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAppLayoutShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Layout'])) {
            $model->layoutShrink = $map['Layout'];
        }

        return $model;
    }
}
