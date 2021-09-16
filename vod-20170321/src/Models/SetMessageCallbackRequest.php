<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class SetMessageCallbackRequest extends Model
{
    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var string
     */
    public $callbackType;

    /**
     * @var string
     */
    public $callbackURL;

    /**
     * @var string
     */
    public $eventTypeList;

    /**
     * @var string
     */
    public $authSwitch;

    /**
     * @var string
     */
    public $authKey;

    /**
     * @var string
     */
    public $mnsEndpoint;

    /**
     * @var string
     */
    public $mnsQueueName;

    /**
     * @var string
     */
    public $appId;
    protected $_name = [
        'ownerAccount'  => 'OwnerAccount',
        'callbackType'  => 'CallbackType',
        'callbackURL'   => 'CallbackURL',
        'eventTypeList' => 'EventTypeList',
        'authSwitch'    => 'AuthSwitch',
        'authKey'       => 'AuthKey',
        'mnsEndpoint'   => 'MnsEndpoint',
        'mnsQueueName'  => 'MnsQueueName',
        'appId'         => 'AppId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->callbackType) {
            $res['CallbackType'] = $this->callbackType;
        }
        if (null !== $this->callbackURL) {
            $res['CallbackURL'] = $this->callbackURL;
        }
        if (null !== $this->eventTypeList) {
            $res['EventTypeList'] = $this->eventTypeList;
        }
        if (null !== $this->authSwitch) {
            $res['AuthSwitch'] = $this->authSwitch;
        }
        if (null !== $this->authKey) {
            $res['AuthKey'] = $this->authKey;
        }
        if (null !== $this->mnsEndpoint) {
            $res['MnsEndpoint'] = $this->mnsEndpoint;
        }
        if (null !== $this->mnsQueueName) {
            $res['MnsQueueName'] = $this->mnsQueueName;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetMessageCallbackRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['CallbackType'])) {
            $model->callbackType = $map['CallbackType'];
        }
        if (isset($map['CallbackURL'])) {
            $model->callbackURL = $map['CallbackURL'];
        }
        if (isset($map['EventTypeList'])) {
            $model->eventTypeList = $map['EventTypeList'];
        }
        if (isset($map['AuthSwitch'])) {
            $model->authSwitch = $map['AuthSwitch'];
        }
        if (isset($map['AuthKey'])) {
            $model->authKey = $map['AuthKey'];
        }
        if (isset($map['MnsEndpoint'])) {
            $model->mnsEndpoint = $map['MnsEndpoint'];
        }
        if (isset($map['MnsQueueName'])) {
            $model->mnsQueueName = $map['MnsQueueName'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        return $model;
    }
}
