<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitCustomHotTopicBroadcastJobRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitCustomHotTopicBroadcastJobRequest\hotTopicBroadcastConfig\stepForCustomSummaryStyleConfig;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitCustomHotTopicBroadcastJobRequest\hotTopicBroadcastConfig\stepForNewsBroadcastContentConfig;

class hotTopicBroadcastConfig extends Model
{
    /**
     * @var stepForCustomSummaryStyleConfig
     */
    public $stepForCustomSummaryStyleConfig;

    /**
     * @var stepForNewsBroadcastContentConfig
     */
    public $stepForNewsBroadcastContentConfig;
    protected $_name = [
        'stepForCustomSummaryStyleConfig' => 'StepForCustomSummaryStyleConfig',
        'stepForNewsBroadcastContentConfig' => 'StepForNewsBroadcastContentConfig',
    ];

    public function validate()
    {
        if (null !== $this->stepForCustomSummaryStyleConfig) {
            $this->stepForCustomSummaryStyleConfig->validate();
        }
        if (null !== $this->stepForNewsBroadcastContentConfig) {
            $this->stepForNewsBroadcastContentConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->stepForCustomSummaryStyleConfig) {
            $res['StepForCustomSummaryStyleConfig'] = null !== $this->stepForCustomSummaryStyleConfig ? $this->stepForCustomSummaryStyleConfig->toArray($noStream) : $this->stepForCustomSummaryStyleConfig;
        }

        if (null !== $this->stepForNewsBroadcastContentConfig) {
            $res['StepForNewsBroadcastContentConfig'] = null !== $this->stepForNewsBroadcastContentConfig ? $this->stepForNewsBroadcastContentConfig->toArray($noStream) : $this->stepForNewsBroadcastContentConfig;
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
        if (isset($map['StepForCustomSummaryStyleConfig'])) {
            $model->stepForCustomSummaryStyleConfig = stepForCustomSummaryStyleConfig::fromMap($map['StepForCustomSummaryStyleConfig']);
        }

        if (isset($map['StepForNewsBroadcastContentConfig'])) {
            $model->stepForNewsBroadcastContentConfig = stepForNewsBroadcastContentConfig::fromMap($map['StepForNewsBroadcastContentConfig']);
        }

        return $model;
    }
}
