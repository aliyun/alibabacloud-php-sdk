<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class UpdateBoardCallbackRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $authKey;

    /**
     * @var string
     */
    public $authSwitch;

    /**
     * @var int
     */
    public $callbackEnable;

    /**
     * @var string
     */
    public $callbackUri;

    /**
     * @var string
     */
    public $callbackEvents;
    protected $_name = [
        'ownerId'        => 'OwnerId',
        'appId'          => 'AppId',
        'authKey'        => 'AuthKey',
        'authSwitch'     => 'AuthSwitch',
        'callbackEnable' => 'CallbackEnable',
        'callbackUri'    => 'CallbackUri',
        'callbackEvents' => 'CallbackEvents',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->authKey) {
            $res['AuthKey'] = $this->authKey;
        }
        if (null !== $this->authSwitch) {
            $res['AuthSwitch'] = $this->authSwitch;
        }
        if (null !== $this->callbackEnable) {
            $res['CallbackEnable'] = $this->callbackEnable;
        }
        if (null !== $this->callbackUri) {
            $res['CallbackUri'] = $this->callbackUri;
        }
        if (null !== $this->callbackEvents) {
            $res['CallbackEvents'] = $this->callbackEvents;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateBoardCallbackRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AuthKey'])) {
            $model->authKey = $map['AuthKey'];
        }
        if (isset($map['AuthSwitch'])) {
            $model->authSwitch = $map['AuthSwitch'];
        }
        if (isset($map['CallbackEnable'])) {
            $model->callbackEnable = $map['CallbackEnable'];
        }
        if (isset($map['CallbackUri'])) {
            $model->callbackUri = $map['CallbackUri'];
        }
        if (isset($map['CallbackEvents'])) {
            $model->callbackEvents = $map['CallbackEvents'];
        }

        return $model;
    }
}
