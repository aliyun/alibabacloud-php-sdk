<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MscOpenSubscription\V20210713\Models\GetWebhookResponseBody;

use AlibabaCloud\Tea\Model;

class webhook extends Model
{
    /**
     * @var string
     */
    public $serverUrl;

    /**
     * @var int
     */
    public $webhookId;

    /**
     * @var string
     */
    public $webhookName;
    protected $_name = [
        'serverUrl'   => 'ServerUrl',
        'webhookId'   => 'WebhookId',
        'webhookName' => 'WebhookName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serverUrl) {
            $res['ServerUrl'] = $this->serverUrl;
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
     * @return webhook
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ServerUrl'])) {
            $model->serverUrl = $map['ServerUrl'];
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
