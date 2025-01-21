<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class DeleteWebhookContactRequest extends Model
{
    /**
     * @var int
     */
    public $webhookId;
    protected $_name = [
        'webhookId' => 'WebhookId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->webhookId) {
            $res['WebhookId'] = $this->webhookId;
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
        if (isset($map['WebhookId'])) {
            $model->webhookId = $map['WebhookId'];
        }

        return $model;
    }
}
