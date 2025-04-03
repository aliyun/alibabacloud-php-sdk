<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class GetHotTopicBroadcastShrinkRequest extends Model
{
    /**
     * @var bool
     */
    public $calcTotalToken;

    /**
     * @var string
     */
    public $category;

    /**
     * @var int
     */
    public $current;

    /**
     * @var string
     */
    public $hotTopicVersion;

    /**
     * @var string
     */
    public $locationQuery;

    /**
     * @var string
     */
    public $locationsShrink;

    /**
     * @var string
     */
    public $query;

    /**
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
     * @var string
     */
    public $topicsShrink;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'calcTotalToken' => 'CalcTotalToken',
        'category' => 'Category',
        'current' => 'Current',
        'hotTopicVersion' => 'HotTopicVersion',
        'locationQuery' => 'LocationQuery',
        'locationsShrink' => 'Locations',
        'query' => 'Query',
        'size' => 'Size',
        'stepForCustomSummaryStyleConfigShrink' => 'StepForCustomSummaryStyleConfig',
        'stepForNewsBroadcastContentConfigShrink' => 'StepForNewsBroadcastContentConfig',
        'topicsShrink' => 'Topics',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->locationQuery) {
            $res['LocationQuery'] = $this->locationQuery;
        }

        if (null !== $this->locationsShrink) {
            $res['Locations'] = $this->locationsShrink;
        }

        if (null !== $this->query) {
            $res['Query'] = $this->query;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['LocationQuery'])) {
            $model->locationQuery = $map['LocationQuery'];
        }

        if (isset($map['Locations'])) {
            $model->locationsShrink = $map['Locations'];
        }

        if (isset($map['Query'])) {
            $model->query = $map['Query'];
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
