<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class CheckWebhookRequest extends Model
{
    /**
     * @example FD200FAE-E98F-496E-BFE6-4CE61E59A2E9
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example https://oapi.dingtalk.com/robot/send?access_token=XXX
     *
     * @var string
     */
    public $webhook;

    /**
     * @example DING_GROUP
     *
     * @var string
     */
    public $webhookType;
    protected $_name = [
        'clientToken' => 'clientToken',
        'webhook'     => 'webhook',
        'webhookType' => 'webhookType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['clientToken'] = $this->clientToken;
        }
        if (null !== $this->webhook) {
            $res['webhook'] = $this->webhook;
        }
        if (null !== $this->webhookType) {
            $res['webhookType'] = $this->webhookType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckWebhookRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['clientToken'])) {
            $model->clientToken = $map['clientToken'];
        }
        if (isset($map['webhook'])) {
            $model->webhook = $map['webhook'];
        }
        if (isset($map['webhookType'])) {
            $model->webhookType = $map['webhookType'];
        }

        return $model;
    }
}
