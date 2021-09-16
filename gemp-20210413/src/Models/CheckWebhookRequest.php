<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\Tea\Model;

class CheckWebhookRequest extends Model
{
    /**
     * @description 幂等校验token
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description webook地址
     *
     * @var string
     */
    public $webhook;

    /**
     * @description webhook地址类型 企业微信WEIXIN_GROUP 钉钉群 DING_GROUP 飞书 FEISHU_GROUP
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
