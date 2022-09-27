<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models\GetSubscriptionItemDetailResponseBody\subscriptionItemDetail;

use AlibabaCloud\Tea\Model;

class webhooks extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $serverUrl;

    /**
     * @var int
     */
    public $webhookId;
    protected $_name = [
        'name'      => 'Name',
        'serverUrl' => 'ServerUrl',
        'webhookId' => 'WebhookId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->serverUrl) {
            $res['ServerUrl'] = $this->serverUrl;
        }
        if (null !== $this->webhookId) {
            $res['WebhookId'] = $this->webhookId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return webhooks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ServerUrl'])) {
            $model->serverUrl = $map['ServerUrl'];
        }
        if (isset($map['WebhookId'])) {
            $model->webhookId = $map['WebhookId'];
        }

        return $model;
    }
}
