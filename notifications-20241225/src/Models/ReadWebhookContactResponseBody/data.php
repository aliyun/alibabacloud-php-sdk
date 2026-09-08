<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Notifications\V20241225\Models\ReadWebhookContactResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $botSecurityToken;

    /**
     * @var int
     */
    public $contactId;

    /**
     * @var string
     */
    public $contactName;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $serverUrl;

    /**
     * @var string
     */
    public $webhookType;
    protected $_name = [
        'botSecurityToken' => 'BotSecurityToken',
        'contactId' => 'ContactId',
        'contactName' => 'ContactName',
        'securityToken' => 'SecurityToken',
        'serverUrl' => 'ServerUrl',
        'webhookType' => 'WebhookType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->botSecurityToken) {
            $res['BotSecurityToken'] = $this->botSecurityToken;
        }

        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }

        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }

        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        if (null !== $this->serverUrl) {
            $res['ServerUrl'] = $this->serverUrl;
        }

        if (null !== $this->webhookType) {
            $res['WebhookType'] = $this->webhookType;
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
        if (isset($map['BotSecurityToken'])) {
            $model->botSecurityToken = $map['BotSecurityToken'];
        }

        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }

        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }

        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        if (isset($map['ServerUrl'])) {
            $model->serverUrl = $map['ServerUrl'];
        }

        if (isset($map['WebhookType'])) {
            $model->webhookType = $map['WebhookType'];
        }

        return $model;
    }
}
