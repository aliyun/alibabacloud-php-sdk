<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models;

use AlibabaCloud\Dara\Model;

class RunHotTopicSummaryShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $hotTopicVersion;
    /**
     * @var string
     */
    public $stepForCustomSummaryStyleConfigShrink;
    /**
     * @var string
     */
    public $topicIdsShrink;
    protected $_name = [
        'hotTopicVersion'                       => 'hotTopicVersion',
        'stepForCustomSummaryStyleConfigShrink' => 'stepForCustomSummaryStyleConfig',
        'topicIdsShrink'                        => 'topicIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hotTopicVersion) {
            $res['hotTopicVersion'] = $this->hotTopicVersion;
        }

        if (null !== $this->stepForCustomSummaryStyleConfigShrink) {
            $res['stepForCustomSummaryStyleConfig'] = $this->stepForCustomSummaryStyleConfigShrink;
        }

        if (null !== $this->topicIdsShrink) {
            $res['topicIds'] = $this->topicIdsShrink;
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
            $model->stepForCustomSummaryStyleConfigShrink = $map['stepForCustomSummaryStyleConfig'];
        }

        if (isset($map['topicIds'])) {
            $model->topicIdsShrink = $map['topicIds'];
        }

        return $model;
    }
}
