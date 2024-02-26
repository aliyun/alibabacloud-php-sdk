<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class DeleteWebhookContactRequest extends Model
{
    /**
     * @description The ID of the webhook alert contact.
     *
     * @example 123
     *
     * @var int
     */
    public $webhookId;
    protected $_name = [
        'webhookId' => 'WebhookId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->webhookId) {
            $res['WebhookId'] = $this->webhookId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteWebhookContactRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WebhookId'])) {
            $model->webhookId = $map['WebhookId'];
        }

        return $model;
    }
}
