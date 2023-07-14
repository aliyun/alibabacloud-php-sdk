<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class GrafanaWorkspaceArmsAlertConfig extends Model
{
    /**
     * @example true
     *
     * @var string
     */
    public $armsAlertsEnable;

    /**
     * @var string
     */
    public $armsAlertsWebhookUrl;
    protected $_name = [
        'armsAlertsEnable'     => 'armsAlertsEnable',
        'armsAlertsWebhookUrl' => 'armsAlertsWebhookUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->armsAlertsEnable) {
            $res['armsAlertsEnable'] = $this->armsAlertsEnable;
        }
        if (null !== $this->armsAlertsWebhookUrl) {
            $res['armsAlertsWebhookUrl'] = $this->armsAlertsWebhookUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GrafanaWorkspaceArmsAlertConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['armsAlertsEnable'])) {
            $model->armsAlertsEnable = $map['armsAlertsEnable'];
        }
        if (isset($map['armsAlertsWebhookUrl'])) {
            $model->armsAlertsWebhookUrl = $map['armsAlertsWebhookUrl'];
        }

        return $model;
    }
}
