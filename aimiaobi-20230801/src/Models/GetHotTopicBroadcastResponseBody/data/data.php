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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetHotTopicBroadcastResponseBody\data;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetHotTopicBroadcastResponseBody\data\data\images;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetHotTopicBroadcastResponseBody\data\data\news;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetHotTopicBroadcastResponseBody\data\data\summary;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 热点话题分类
     *
     * @var string
     */
    public $category;

    /**
     * @example 创建时间
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 34.7905341705522
     *
     * @var float
     */
    public $customHotValue;

    /**
     * @example 自定义热点话题文本摘要
     *
     * @var string
     */
    public $customTextSummary;

    /**
     * @example 热点话题名称
     *
     * @var string
     */
    public $hotTopic;

    /**
     * @example 热点话题摘要版本
     *
     * @var string
     */
    public $hotTopicVersion;

    /**
     * @example 1.4120480606282884
     *
     * @var float
     */
    public $hotValue;

    /**
     * @example 热点话题ID
     *
     * @var string
     */
    public $id;

    /**
     * @var images[]
     */
    public $images;

    /**
     * @example 29
     *
     * @var int
     */
    public $inputToken;

    /**
     * @var news[]
     */
    public $news;

    /**
     * @example 22
     *
     * @var int
     */
    public $outputToken;

    /**
     * @var summary
     */
    public $summary;

    /**
     * @example 热点话题文本摘要
     *
     * @var string
     */
    public $textSummary;
    protected $_name = [
        'category' => 'Category',
        'createTime' => 'CreateTime',
        'customHotValue' => 'CustomHotValue',
        'customTextSummary' => 'CustomTextSummary',
        'hotTopic' => 'HotTopic',
        'hotTopicVersion' => 'HotTopicVersion',
        'hotValue' => 'HotValue',
        'id' => 'Id',
        'images' => 'Images',
        'inputToken' => 'InputToken',
        'news' => 'News',
        'outputToken' => 'OutputToken',
        'summary' => 'Summary',
        'textSummary' => 'TextSummary',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->customHotValue) {
            $res['CustomHotValue'] = $this->customHotValue;
        }
        if (null !== $this->customTextSummary) {
            $res['CustomTextSummary'] = $this->customTextSummary;
        }
        if (null !== $this->hotTopic) {
            $res['HotTopic'] = $this->hotTopic;
        }
        if (null !== $this->hotTopicVersion) {
            $res['HotTopicVersion'] = $this->hotTopicVersion;
        }
        if (null !== $this->hotValue) {
            $res['HotValue'] = $this->hotValue;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->images) {
            $res['Images'] = [];
            if (null !== $this->images && \is_array($this->images)) {
                $n = 0;
                foreach ($this->images as $item) {
                    $res['Images'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->inputToken) {
            $res['InputToken'] = $this->inputToken;
        }
        if (null !== $this->news) {
            $res['News'] = [];
            if (null !== $this->news && \is_array($this->news)) {
                $n = 0;
                foreach ($this->news as $item) {
                    $res['News'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->outputToken) {
            $res['OutputToken'] = $this->outputToken;
        }
        if (null !== $this->summary) {
            $res['Summary'] = null !== $this->summary ? $this->summary->toMap() : null;
        }
        if (null !== $this->textSummary) {
            $res['TextSummary'] = $this->textSummary;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CustomHotValue'])) {
            $model->customHotValue = $map['CustomHotValue'];
        }
        if (isset($map['CustomTextSummary'])) {
            $model->customTextSummary = $map['CustomTextSummary'];
        }
        if (isset($map['HotTopic'])) {
            $model->hotTopic = $map['HotTopic'];
        }
        if (isset($map['HotTopicVersion'])) {
            $model->hotTopicVersion = $map['HotTopicVersion'];
        }
        if (isset($map['HotValue'])) {
            $model->hotValue = $map['HotValue'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Images'])) {
            if (!empty($map['Images'])) {
                $model->images = [];
                $n = 0;
                foreach ($map['Images'] as $item) {
                    $model->images[$n++] = null !== $item ? images::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['InputToken'])) {
            $model->inputToken = $map['InputToken'];
        }
        if (isset($map['News'])) {
            if (!empty($map['News'])) {
                $model->news = [];
                $n = 0;
                foreach ($map['News'] as $item) {
                    $model->news[$n++] = null !== $item ? news::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OutputToken'])) {
            $model->outputToken = $map['OutputToken'];
        }
        if (isset($map['Summary'])) {
            $model->summary = summary::fromMap($map['Summary']);
        }
        if (isset($map['TextSummary'])) {
            $model->textSummary = $map['TextSummary'];
        }

        return $model;
    }
}
