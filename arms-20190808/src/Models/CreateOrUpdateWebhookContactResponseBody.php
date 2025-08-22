<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateWebhookContactResponseBody\webhookContact;

class CreateOrUpdateWebhookContactResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var webhookContact
     */
    public $webhookContact;
    protected $_name = [
        'requestId' => 'RequestId',
        'webhookContact' => 'WebhookContact',
    ];

    public function validate()
    {
        if (null !== $this->webhookContact) {
            $this->webhookContact->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->webhookContact) {
            $res['WebhookContact'] = null !== $this->webhookContact ? $this->webhookContact->toArray($noStream) : $this->webhookContact;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['WebhookContact'])) {
            $model->webhookContact = webhookContact::fromMap($map['WebhookContact']);
        }

        return $model;
    }
}
