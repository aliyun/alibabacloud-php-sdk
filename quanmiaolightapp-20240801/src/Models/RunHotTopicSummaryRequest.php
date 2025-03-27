<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunHotTopicSummaryRequest\stepForCustomSummaryStyleConfig;

class RunHotTopicSummaryRequest extends Model
{
    /**
     * @var string
     */
    public $hotTopicVersion;

    /**
     * @var stepForCustomSummaryStyleConfig
     */
    public $stepForCustomSummaryStyleConfig;

    /**
     * @var string[]
     */
    public $topicIds;
    protected $_name = [
        'hotTopicVersion' => 'hotTopicVersion',
        'stepForCustomSummaryStyleConfig' => 'stepForCustomSummaryStyleConfig',
        'topicIds' => 'topicIds',
    ];

    public function validate()
    {
        if (null !== $this->stepForCustomSummaryStyleConfig) {
            $this->stepForCustomSummaryStyleConfig->validate();
        }
        if (\is_array($this->topicIds)) {
            Model::validateArray($this->topicIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hotTopicVersion) {
            $res['hotTopicVersion'] = $this->hotTopicVersion;
        }

        if (null !== $this->stepForCustomSummaryStyleConfig) {
            $res['stepForCustomSummaryStyleConfig'] = null !== $this->stepForCustomSummaryStyleConfig ? $this->stepForCustomSummaryStyleConfig->toArray($noStream) : $this->stepForCustomSummaryStyleConfig;
        }

        if (null !== $this->topicIds) {
            if (\is_array($this->topicIds)) {
                $res['topicIds'] = [];
                $n1 = 0;
                foreach ($this->topicIds as $item1) {
                    $res['topicIds'][$n1++] = $item1;
                }
            }
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
        if (isset($map['hotTopicVersion'])) {
            $model->hotTopicVersion = $map['hotTopicVersion'];
        }

        if (isset($map['stepForCustomSummaryStyleConfig'])) {
            $model->stepForCustomSummaryStyleConfig = stepForCustomSummaryStyleConfig::fromMap($map['stepForCustomSummaryStyleConfig']);
        }

        if (isset($map['topicIds'])) {
            if (!empty($map['topicIds'])) {
                $model->topicIds = [];
                $n1 = 0;
                foreach ($map['topicIds'] as $item1) {
                    $model->topicIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
