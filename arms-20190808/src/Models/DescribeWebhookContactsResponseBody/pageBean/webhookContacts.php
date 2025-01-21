<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeWebhookContactsResponseBody\pageBean;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeWebhookContactsResponseBody\pageBean\webhookContacts\webhook;

class webhookContacts extends Model
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
        if (null !== $this->webhook) {
            $this->webhook->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->webhook) {
            $res['Webhook'] = null !== $this->webhook ? $this->webhook->toArray($noStream) : $this->webhook;
        }

        if (null !== $this->webhookId) {
            $res['WebhookId'] = $this->webhookId;
        }

        if (null !== $this->webhookName) {
            $res['WebhookName'] = $this->webhookName;
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
