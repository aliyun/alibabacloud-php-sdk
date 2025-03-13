<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Tea\Model;

class ExportHotTopicPlanningProposalsRequest extends Model
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
     * @var string[]
     */
    public $customViewPointIds;

    /**
     * @example 导出文档类型，word:导出为word,xmind:导处为xmind
     *
     * @var string
     */
    public $exportType;

    /**
     * @var string[]
     */
    public $titles;

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
        'agentKey' => 'AgentKey',
        'customViewPointIds' => 'CustomViewPointIds',
        'exportType' => 'ExportType',
        'titles' => 'Titles',
        'topic' => 'Topic',
        'topicSource' => 'TopicSource',
        'viewPointType' => 'ViewPointType',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentKey) {
            $res['AgentKey'] = $this->agentKey;
        }
        if (null !== $this->customViewPointIds) {
            $res['CustomViewPointIds'] = $this->customViewPointIds;
        }
        if (null !== $this->exportType) {
            $res['ExportType'] = $this->exportType;
        }
        if (null !== $this->titles) {
            $res['Titles'] = $this->titles;
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
     * @return ExportHotTopicPlanningProposalsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentKey'])) {
            $model->agentKey = $map['AgentKey'];
        }
        if (isset($map['CustomViewPointIds'])) {
            if (!empty($map['CustomViewPointIds'])) {
                $model->customViewPointIds = $map['CustomViewPointIds'];
            }
        }
        if (isset($map['ExportType'])) {
            $model->exportType = $map['ExportType'];
        }
        if (isset($map['Titles'])) {
            if (!empty($map['Titles'])) {
                $model->titles = $map['Titles'];
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
