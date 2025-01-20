<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class ExportHotTopicPlanningProposalsRequest extends Model
{
    /**
     * @var string
     */
    public $agentKey;
    /**
     * @var string[]
     */
    public $customViewPointIds;
    /**
     * @var string
     */
    public $exportType;
    /**
     * @var string[]
     */
    public $titles;
    /**
     * @var string
     */
    public $topic;
    /**
     * @var string
     */
    public $topicSource;
    /**
     * @var string
     */
    public $viewPointType;
    protected $_name = [
        'agentKey'           => 'AgentKey',
        'customViewPointIds' => 'CustomViewPointIds',
        'exportType'         => 'ExportType',
        'titles'             => 'Titles',
        'topic'              => 'Topic',
        'topicSource'        => 'TopicSource',
        'viewPointType'      => 'ViewPointType',
    ];

    public function validate()
    {
        if (\is_array($this->customViewPointIds)) {
            Model::validateArray($this->customViewPointIds);
        }
        if (\is_array($this->titles)) {
            Model::validateArray($this->titles);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }

        if (null !== $this->customViewPointIds) {
            if (\is_array($this->customViewPointIds)) {
                $res['CustomViewPointIds'] = [];
                $n1                        = 0;
                foreach ($this->customViewPointIds as $item1) {
                    $res['CustomViewPointIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->exportType) {
            $res['ExportType'] = $this->exportType;
        }

        if (null !== $this->titles) {
            if (\is_array($this->titles)) {
                $res['Titles'] = [];
                $n1            = 0;
                foreach ($this->titles as $item1) {
                    $res['Titles'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        if (null !== $this->topicSource) {
            $res['TopicSource'] = $this->topicSource;
        }

        if (null !== $this->viewPointType) {
            $res['ViewPointType'] = $this->viewPointType;
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
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }

        if (isset($map['CustomViewPointIds'])) {
            if (!empty($map['CustomViewPointIds'])) {
                $model->customViewPointIds = [];
                $n1                        = 0;
                foreach ($map['CustomViewPointIds'] as $item1) {
                    $model->customViewPointIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ExportType'])) {
            $model->exportType = $map['ExportType'];
        }

        if (isset($map['Titles'])) {
            if (!empty($map['Titles'])) {
                $model->titles = [];
                $n1            = 0;
                foreach ($map['Titles'] as $item1) {
                    $model->titles[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        if (isset($map['TopicSource'])) {
            $model->topicSource = $map['TopicSource'];
        }

        if (isset($map['ViewPointType'])) {
            $model->viewPointType = $map['ViewPointType'];
        }

        return $model;
    }
}
