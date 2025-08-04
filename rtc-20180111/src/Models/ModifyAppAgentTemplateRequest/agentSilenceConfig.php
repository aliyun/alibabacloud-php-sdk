<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyAppAgentTemplateRequest;

use AlibabaCloud\Tea\Model;

class agentSilenceConfig extends Model
{
    /**
     * @example 30
     *
     * @var int
     */
    public $alertTimeout;

    /**
     * @var string
     */
    public $content;

    /**
     * @example 2
     *
     * @var int
     */
    public $strategy;

    /**
     * @example 30
     *
     * @var int
     */
    public $webhookTriggerTimeout;
    protected $_name = [
        'alertTimeout' => 'AlertTimeout',
        'content' => 'Content',
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
        if (isset($map['Strategy'])) {
            $model->strategy = $map['Strategy'];
        }
        if (isset($map['WebhookTriggerTimeout'])) {
            $model->webhookTriggerTimeout = $map['WebhookTriggerTimeout'];
        }

        return $model;
    }
}
