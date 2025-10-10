<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rtc\V20180111\Models\ModifyAppAgentTemplateRequest;

use AlibabaCloud\Dara\Model;

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
        'strategy' => 'Strategy',
        'webhookTriggerTimeout' => 'WebhookTriggerTimeout',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
