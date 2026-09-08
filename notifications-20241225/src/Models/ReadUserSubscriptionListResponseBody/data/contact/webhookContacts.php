<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Notifications\V20241225\Models\ReadUserSubscriptionListResponseBody\data\contact;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Notifications\V20241225\Models\ReadUserSubscriptionListResponseBody\data\contact\webhookContacts\messageSource;

class webhookContacts extends Model
{
    /**
     * @var int
     */
    public $contactId;

    /**
     * @var string
     */
    public $contactName;

    /**
     * @var messageSource
     */
    public $messageSource;

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
        'contactId' => 'ContactId',
        'contactName' => 'ContactName',
        'messageSource' => 'MessageSource',
        'securityToken' => 'SecurityToken',
        'serverUrl' => 'ServerUrl',
        'webhookType' => 'WebhookType',
    ];

    public function validate()
    {
        if (null !== $this->messageSource) {
            $this->messageSource->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }

        if (null !== $this->contactName) {
            $res['ContactName'] = $this->contactName;
        }

        if (null !== $this->messageSource) {
            $res['MessageSource'] = null !== $this->messageSource ? $this->messageSource->toArray($noStream) : $this->messageSource;
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
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }

        if (isset($map['ContactName'])) {
            $model->contactName = $map['ContactName'];
        }

        if (isset($map['MessageSource'])) {
            $model->messageSource = messageSource::fromMap($map['MessageSource']);
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
