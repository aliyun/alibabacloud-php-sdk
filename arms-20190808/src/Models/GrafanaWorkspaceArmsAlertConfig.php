<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;

class GrafanaWorkspaceArmsAlertConfig extends Model
{
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
