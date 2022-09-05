<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateWebhookContactResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateWebhookContactResponseBody\webhookContact\webhook;
use AlibabaCloud\Tea\Model;

class webhookContact extends Model
{
    /**
     * @var webhook
     */
    public $webhook;

    /**
     * @var float
     */
    public $webhookId;

    /**
     * @var string
     */
    public $webhookName;
    protected $_name = [
        'webhook'     => 'Webhook',
        'webhookId'   => 'WebhookId',
        'webhookName' => 'WebhookName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->webhook) {
            $res['Webhook'] = null !== $this->webhook ? $this->webhook->toMap() : null;
        }
        if (null !== $this->webhookId) {
            $res['WebhookId'] = $this->webhookId;
        }
        if (null !== $this->webhookName) {
            $res['WebhookName'] = $this->webhookName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return webhookContact
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Webhook'])) {
            $model->webhook = webhook::fromMap($map['Webhook']);
        }
        if (isset($map['WebhookId'])) {
            $model->webhookId = $map['WebhookId'];
        }
        if (isset($map['WebhookName'])) {
            $model->webhookName = $map['WebhookName'];
        }

        return $model;
    }
}
