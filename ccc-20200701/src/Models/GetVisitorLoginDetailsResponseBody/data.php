<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetVisitorLoginDetailsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $chatAppId;

    /**
     * @var string
     */
    public $chatAppKey;

    /**
     * @var string
     */
    public $chatDeviceId;

    /**
     * @var string
     */
    public $chatLoginToken;

    /**
     * @var string
     */
    public $chatServerUrl;

    /**
     * @var string
     */
    public $chatUserId;
    protected $_name = [
        'chatAppId' => 'ChatAppId',
        'chatAppKey' => 'ChatAppKey',
        'chatDeviceId' => 'ChatDeviceId',
        'chatLoginToken' => 'ChatLoginToken',
        'chatServerUrl' => 'ChatServerUrl',
        'chatUserId' => 'ChatUserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->chatAppId) {
            $res['ChatAppId'] = $this->chatAppId;
        }

        if (null !== $this->chatAppKey) {
            $res['ChatAppKey'] = $this->chatAppKey;
        }

        if (null !== $this->chatDeviceId) {
            $res['ChatDeviceId'] = $this->chatDeviceId;
        }

        if (null !== $this->chatLoginToken) {
            $res['ChatLoginToken'] = $this->chatLoginToken;
        }

        if (null !== $this->chatServerUrl) {
            $res['ChatServerUrl'] = $this->chatServerUrl;
        }

        if (null !== $this->chatUserId) {
            $res['ChatUserId'] = $this->chatUserId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChatAppId'])) {
            $model->chatAppId = $map['ChatAppId'];
        }

        if (isset($map['ChatAppKey'])) {
            $model->chatAppKey = $map['ChatAppKey'];
        }

        if (isset($map['ChatDeviceId'])) {
            $model->chatDeviceId = $map['ChatDeviceId'];
        }

        if (isset($map['ChatLoginToken'])) {
            $model->chatLoginToken = $map['ChatLoginToken'];
        }

        if (isset($map['ChatServerUrl'])) {
            $model->chatServerUrl = $map['ChatServerUrl'];
        }

        if (isset($map['ChatUserId'])) {
            $model->chatUserId = $map['ChatUserId'];
        }

        return $model;
    }
}
