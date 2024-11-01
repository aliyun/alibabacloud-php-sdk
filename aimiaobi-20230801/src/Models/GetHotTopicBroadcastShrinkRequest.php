<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class GetHotTopicBroadcastShrinkRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $calcTotalToken;

    /**
     * @example 分类筛选
     *
     * @var string
     */
    public $category;

    /**
     * @example 1
     *
     * @var int
     */
    public $current;

    /**
     * @example 2024-10-11_13
     *
     * @var string
     */
    public $hotTopicVersion;

    /**
     * @example 5
     *
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $stepForCustomSummaryStyleConfigShrink;

    /**
     * @var string
     */
    public $stepForNewsBroadcastContentConfigShrink;

    /**
     * @example ["主题1","主题2"]
     *
     * @var string
     */
    public $topicsShrink;

    /**
     * @description This parameter is required.
     *
     * @example xxxx
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'calcTotalToken'                          => 'CalcTotalToken',
        'category'                                => 'Category',
        'current'                                 => 'Current',
        'hotTopicVersion'                         => 'HotTopicVersion',
        'size'                                    => 'Size',
        'stepForCustomSummaryStyleConfigShrink'   => 'StepForCustomSummaryStyleConfig',
        'stepForNewsBroadcastContentConfigShrink' => 'StepForNewsBroadcastContentConfig',
        'topicsShrink'                            => 'Topics',
        'workspaceId'                             => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->calcTotalToken) {
            $res['CalcTotalToken'] = $this->calcTotalToken;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->current) {
            $res['Current'] = $this->current;
        }
        if (null !== $this->hotTopicVersion) {
            $res['HotTopicVersion'] = $this->hotTopicVersion;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }
        if (null !== $this->stepForCustomSummaryStyleConfigShrink) {
            $res['StepForCustomSummaryStyleConfig'] = $this->stepForCustomSummaryStyleConfigShrink;
        }
        if (null !== $this->stepForNewsBroadcastContentConfigShrink) {
            $res['StepForNewsBroadcastContentConfig'] = $this->stepForNewsBroadcastContentConfigShrink;
        }
        if (null !== $this->topicsShrink) {
            $res['Topics'] = $this->topicsShrink;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetHotTopicBroadcastShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CalcTotalToken'])) {
            $model->calcTotalToken = $map['CalcTotalToken'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Current'])) {
            $model->current = $map['Current'];
        }
        if (isset($map['HotTopicVersion'])) {
            $model->hotTopicVersion = $map['HotTopicVersion'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }
        if (isset($map['StepForCustomSummaryStyleConfig'])) {
            $model->stepForCustomSummaryStyleConfigShrink = $map['StepForCustomSummaryStyleConfig'];
        }
        if (isset($map['StepForNewsBroadcastContentConfig'])) {
            $model->stepForNewsBroadcastContentConfigShrink = $map['StepForNewsBroadcastContentConfig'];
        }
        if (isset($map['Topics'])) {
            $model->topicsShrink = $map['Topics'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
