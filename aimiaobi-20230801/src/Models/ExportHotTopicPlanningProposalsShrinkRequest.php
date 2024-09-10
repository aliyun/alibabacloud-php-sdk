<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class ExportHotTopicPlanningProposalsShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example xxxxx_p_efm
     *
     * @var string
     */
    public $agentKey;

    /**
     * @example 025c6cee437741368098b790c90166f8
     *
     * @var string
     */
    public $customViewPointIdsShrink;

    /**
     * @example 导出文档类型，word:导出为word,xmind:导处为xmind
     *
     * @var string
     */
    public $exportType;

    /**
     * @var string
     */
    public $titlesShrink;

    /**
     * @description This parameter is required.
     *
     * @example 热榜主题
     *
     * @var string
     */
    public $topic;

    /**
     * @description This parameter is required.
     *
     * @example 热榜源
     *
     * @var string
     */
    public $topicSource;

    /**
     * @example 选题策划类型：CustomViewPoints:自定义视角，HotViewPoints:热门视角、TimedViewPoints:时效性视角、WebReviewPoints:网友视角、FreshViewPoints:新颖视角
     *
     * @var string
     */
    public $viewPointType;
    protected $_name = [
        'agentKey'                 => 'AgentKey',
        'customViewPointIdsShrink' => 'CustomViewPointIds',
        'exportType'               => 'ExportType',
        'titlesShrink'             => 'Titles',
        'topic'                    => 'Topic',
        'topicSource'              => 'TopicSource',
        'viewPointType'            => 'ViewPointType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }
        if (null !== $this->customViewPointIdsShrink) {
            $res['CustomViewPointIds'] = $this->customViewPointIdsShrink;
        }
        if (null !== $this->exportType) {
            $res['ExportType'] = $this->exportType;
        }
        if (null !== $this->titlesShrink) {
            $res['Titles'] = $this->titlesShrink;
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

    /**
     * @param array $map
     *
     * @return ExportHotTopicPlanningProposalsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['CustomViewPointIds'])) {
            $model->customViewPointIdsShrink = $map['CustomViewPointIds'];
        }
        if (isset($map['ExportType'])) {
            $model->exportType = $map['ExportType'];
        }
        if (isset($map['Titles'])) {
            $model->titlesShrink = $map['Titles'];
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
