<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateOrUpdateWebhookContactResponseBody\webhookContact;
use AlibabaCloud\Tea\Model;

class CreateOrUpdateWebhookContactResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 16AF921B-8187-489F-9913-43C808B4****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The returned webhook alert contact.
     *
     * @var webhookContact
     */
    public $webhookContact;
    protected $_name = [
        'requestId'      => 'RequestId',
        'webhookContact' => 'WebhookContact',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->webhookContact) {
            $res['WebhookContact'] = null !== $this->webhookContact ? $this->webhookContact->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateOrUpdateWebhookContactResponseBody
     */
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
