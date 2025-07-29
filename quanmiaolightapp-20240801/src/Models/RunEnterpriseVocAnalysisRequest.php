<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models;

use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunEnterpriseVocAnalysisRequest\filterTags;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunEnterpriseVocAnalysisRequest\tags;
use AlibabaCloud\Tea\Model;

class RunEnterpriseVocAnalysisRequest extends Model
{
    /**
     * @var string
     */
    public $akProxy;

    /**
     * @var string
     */
    public $apiKey;

    /**
     * @description 需要进行VOC分析的文本内容（content、contents、url、fileKey 四选一。优先级从小到大）
     *
     * @example 这是一段需要分析的文本内容
     *
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $extraInfo;

    /**
     * @description 过滤标签，用于筛选符合条件的内容。
     *
     * @var filterTags[]
     */
    public $filterTags;

    /**
     * @example qwen-max
     *
     * @var string
     */
    public $modelId;

    /**
     * @description 指定返回结果的格式，支持json或text
     *
     * @example 按照如下格式输出：{"text1": "xxxx", "text2": "xxxx"}
     *
     * @var string
     */
    public $outputFormat;

    /**
     * @var bool
     */
    public $sourceTrace;

    /**
     * @description 业务标签体系，用于对文本内容进行分类和分析。
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @example 你是一名经验丰富的数据分析师，擅长从文本评论中提取结构化信息。你需要从用户评论列表中识别和提取出与以下四个维度相关的关键词和短语：
     *
     * 索引：输入评论JSON数组中的索引（从零开始）表示针对该条索引抽取的维度。
     * 购买动机：描述用户购买产品的原因、需求或驱动力的关键词或短语。
     * 未满足需求点：用户在使用产品过程中提到的未满足需求或问题的关键词或短语。
     * 使用场景：用户提到的具体使用场景、使用方式或环境的关键词或短语。
     * 正负面观点：明确表示用户对产品或服务的正面或负面看法的关键词或短语。
     *
     * @var string
     */
    public $taskDescription;
    protected $_name = [
        'akProxy' => 'akProxy',
        'apiKey' => 'apiKey',
        'content' => 'content',
        'extraInfo' => 'extraInfo',
        'filterTags' => 'filterTags',
        'modelId' => 'modelId',
        'outputFormat' => 'outputFormat',
        'sourceTrace' => 'sourceTrace',
        'tags' => 'tags',
        'taskDescription' => 'taskDescription',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->akProxy) {
            $res['akProxy'] = $this->akProxy;
        }
        if (null !== $this->apiKey) {
            $res['apiKey'] = $this->apiKey;
        }
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->extraInfo) {
            $res['extraInfo'] = $this->extraInfo;
        }
        if (null !== $this->filterTags) {
            $res['filterTags'] = [];
            if (null !== $this->filterTags && \is_array($this->filterTags)) {
                $n = 0;
                foreach ($this->filterTags as $item) {
                    $res['filterTags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->modelId) {
            $res['modelId'] = $this->modelId;
        }
        if (null !== $this->outputFormat) {
            $res['outputFormat'] = $this->outputFormat;
        }
        if (null !== $this->sourceTrace) {
            $res['sourceTrace'] = $this->sourceTrace;
        }
        if (null !== $this->tags) {
            $res['tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->taskDescription) {
            $res['taskDescription'] = $this->taskDescription;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunEnterpriseVocAnalysisRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['akProxy'])) {
            $model->akProxy = $map['akProxy'];
        }
        if (isset($map['apiKey'])) {
            $model->apiKey = $map['apiKey'];
        }
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['extraInfo'])) {
            $model->extraInfo = $map['extraInfo'];
        }
        if (isset($map['filterTags'])) {
            if (!empty($map['filterTags'])) {
                $model->filterTags = [];
                $n = 0;
                foreach ($map['filterTags'] as $item) {
                    $model->filterTags[$n++] = null !== $item ? filterTags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['modelId'])) {
            $model->modelId = $map['modelId'];
        }
        if (isset($map['outputFormat'])) {
            $model->outputFormat = $map['outputFormat'];
        }
        if (isset($map['sourceTrace'])) {
            $model->sourceTrace = $map['sourceTrace'];
        }
        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n = 0;
                foreach ($map['tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['taskDescription'])) {
            $model->taskDescription = $map['taskDescription'];
        }

        return $model;
    }
}
