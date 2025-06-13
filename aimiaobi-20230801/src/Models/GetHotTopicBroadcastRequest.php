<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetHotTopicBroadcastRequest\stepForCustomSummaryStyleConfig;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetHotTopicBroadcastRequest\stepForNewsBroadcastContentConfig;

class GetHotTopicBroadcastRequest extends Model
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
     * @var string[]
     */
    public $locations;

    /**
     * @var string
     */
    public $query;

    /**
     * @var int
     */
    public $size;

    /**
     * @var stepForCustomSummaryStyleConfig
     */
    public $stepForCustomSummaryStyleConfig;

    /**
     * @var stepForNewsBroadcastContentConfig
     */
    public $stepForNewsBroadcastContentConfig;

    /**
     * @var string[]
     */
    public $topics;

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
        'locations' => 'Locations',
        'query' => 'Query',
        'size' => 'Size',
        'stepForCustomSummaryStyleConfig' => 'StepForCustomSummaryStyleConfig',
        'stepForNewsBroadcastContentConfig' => 'StepForNewsBroadcastContentConfig',
        'topics' => 'Topics',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->locations)) {
            Model::validateArray($this->locations);
        }
        if (null !== $this->stepForCustomSummaryStyleConfig) {
            $this->stepForCustomSummaryStyleConfig->validate();
        }
        if (null !== $this->stepForNewsBroadcastContentConfig) {
            $this->stepForNewsBroadcastContentConfig->validate();
        }
        if (\is_array($this->topics)) {
            Model::validateArray($this->topics);
        }
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

        if (null !== $this->locations) {
            if (\is_array($this->locations)) {
                $res['Locations'] = [];
                $n1 = 0;
                foreach ($this->locations as $item1) {
                    $res['Locations'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->query) {
            $res['Query'] = $this->query;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->stepForCustomSummaryStyleConfig) {
            $res['StepForCustomSummaryStyleConfig'] = null !== $this->stepForCustomSummaryStyleConfig ? $this->stepForCustomSummaryStyleConfig->toArray($noStream) : $this->stepForCustomSummaryStyleConfig;
        }

        if (null !== $this->stepForNewsBroadcastContentConfig) {
            $res['StepForNewsBroadcastContentConfig'] = null !== $this->stepForNewsBroadcastContentConfig ? $this->stepForNewsBroadcastContentConfig->toArray($noStream) : $this->stepForNewsBroadcastContentConfig;
        }

        if (null !== $this->topics) {
            if (\is_array($this->topics)) {
                $res['Topics'] = [];
                $n1 = 0;
                foreach ($this->topics as $item1) {
                    $res['Topics'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['Locations'])) {
                $model->locations = [];
                $n1 = 0;
                foreach ($map['Locations'] as $item1) {
                    $model->locations[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Query'])) {
            $model->query = $map['Query'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['StepForCustomSummaryStyleConfig'])) {
            $model->stepForCustomSummaryStyleConfig = stepForCustomSummaryStyleConfig::fromMap($map['StepForCustomSummaryStyleConfig']);
        }

        if (isset($map['StepForNewsBroadcastContentConfig'])) {
            $model->stepForNewsBroadcastContentConfig = stepForNewsBroadcastContentConfig::fromMap($map['StepForNewsBroadcastContentConfig']);
        }

        if (isset($map['Topics'])) {
            if (!empty($map['Topics'])) {
                $model->topics = [];
                $n1 = 0;
                foreach ($map['Topics'] as $item1) {
                    $model->topics[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
