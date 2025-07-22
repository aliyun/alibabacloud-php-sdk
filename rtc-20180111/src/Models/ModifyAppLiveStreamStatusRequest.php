<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models;

use AlibabaCloud\Tea\Model;

class ModifyAppLiveStreamStatusRequest extends Model
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
     * @example 53200b81-b761-4c10-842a-a0726xxxx
     *
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'appId' => 'AppId',
        'clientToken' => 'ClientToken',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyAppLiveStreamStatusRequest
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

        return $model;
    }
}
