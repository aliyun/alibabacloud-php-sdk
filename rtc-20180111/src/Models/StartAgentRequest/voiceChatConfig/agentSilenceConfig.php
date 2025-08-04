<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\StartAgentRequest\voiceChatConfig;

use AlibabaCloud\Tea\Model;

class agentSilenceConfig extends Model
{
    /**
     * @var int
     */
    public $alertTimeout;

    /**
     * @var string
     */
    public $content;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var int
     */
    public $strategy;

    /**
     * @var int
     */
    public $webhookTriggerTimeout;
    protected $_name = [
        'alertTimeout' => 'AlertTimeout',
        'content' => 'Content',
        'enable' => 'Enable',
        'strategy' => 'Strategy',
        'webhookTriggerTimeout' => 'WebhookTriggerTimeout',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertTimeout) {
            $res['AlertTimeout'] = $this->alertTimeout;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->strategy) {
            $res['Strategy'] = $this->strategy;
        }
        if (null !== $this->webhookTriggerTimeout) {
            $res['WebhookTriggerTimeout'] = $this->webhookTriggerTimeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return agentSilenceConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertTimeout'])) {
            $model->alertTimeout = $map['AlertTimeout'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['Strategy'])) {
            $model->strategy = $map['Strategy'];
        }
        if (isset($map['WebhookTriggerTimeout'])) {
            $model->webhookTriggerTimeout = $map['WebhookTriggerTimeout'];
        }

        return $model;
    }
}
