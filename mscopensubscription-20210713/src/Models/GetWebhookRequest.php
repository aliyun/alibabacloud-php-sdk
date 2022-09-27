<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models;

use AlibabaCloud\Tea\Model;

class GetWebhookRequest extends Model
{
    /**
     * @var string
     */
    public $locale;

    /**
     * @var int
     */
    public $webhookId;
    protected $_name = [
        'locale'    => 'Locale',
        'webhookId' => 'WebhookId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->locale) {
            $res['Locale'] = $this->locale;
        }
        if (null !== $this->webhookId) {
            $res['WebhookId'] = $this->webhookId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetWebhookRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Locale'])) {
            $model->locale = $map['Locale'];
        }
        if (isset($map['WebhookId'])) {
            $model->webhookId = $map['WebhookId'];
        }

        return $model;
    }
}
