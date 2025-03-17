<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models;

use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunHotTopicSummaryRequest\stepForCustomSummaryStyleConfig;
use AlibabaCloud\Tea\Model;

class RunHotTopicSummaryRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 2024-10-16_8
     *
     * @var string
     */
    public $hotTopicVersion;

    /**
     * @description This parameter is required.
     *
     * @var stepForCustomSummaryStyleConfig
     */
    public $stepForCustomSummaryStyleConfig;

    /**
     * @description This parameter is required.
     *
     * @example xxxxx
     *
     * @var string[]
     */
    public $topicIds;
    protected $_name = [
        'hotTopicVersion' => 'hotTopicVersion',
        'stepForCustomSummaryStyleConfig' => 'stepForCustomSummaryStyleConfig',
        'topicIds' => 'topicIds',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->hotTopicVersion) {
            $res['hotTopicVersion'] = $this->hotTopicVersion;
        }
        if (null !== $this->stepForCustomSummaryStyleConfig) {
            $res['stepForCustomSummaryStyleConfig'] = null !== $this->stepForCustomSummaryStyleConfig ? $this->stepForCustomSummaryStyleConfig->toMap() : null;
        }
        if (null !== $this->topicIds) {
            $res['topicIds'] = $this->topicIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunHotTopicSummaryRequest
     */
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
                $model->topicIds = $map['topicIds'];
            }
        }

        return $model;
    }
}
