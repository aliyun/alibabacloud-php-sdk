<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetHotTopicBroadcastResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetHotTopicBroadcastResponseBody\data\data\images;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetHotTopicBroadcastResponseBody\data\data\news;
use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetHotTopicBroadcastResponseBody\data\data\summary;

class data extends Model
{
    /**
     * @var string
     */
    public $category;
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var float
     */
    public $customHotValue;
    /**
     * @var string
     */
    public $customTextSummary;
    /**
     * @var string
     */
    public $hotTopic;
    /**
     * @var string
     */
    public $hotTopicVersion;
    /**
     * @var float
     */
    public $hotValue;
    /**
     * @var string
     */
    public $id;
    /**
     * @var images[]
     */
    public $images;
    /**
     * @var int
     */
    public $inputToken;
    /**
     * @var news[]
     */
    public $news;
    /**
     * @var int
     */
    public $outputToken;
    /**
     * @var summary
     */
    public $summary;
    /**
     * @var string
     */
    public $textSummary;
    protected $_name = [
        'category'          => 'Category',
        'createTime'        => 'CreateTime',
        'customHotValue'    => 'CustomHotValue',
        'customTextSummary' => 'CustomTextSummary',
        'hotTopic'          => 'HotTopic',
        'hotTopicVersion'   => 'HotTopicVersion',
        'hotValue'          => 'HotValue',
        'id'                => 'Id',
        'images'            => 'Images',
        'inputToken'        => 'InputToken',
        'news'              => 'News',
        'outputToken'       => 'OutputToken',
        'summary'           => 'Summary',
        'textSummary'       => 'TextSummary',
    ];

    public function validate()
    {
        if (\is_array($this->images)) {
            Model::validateArray($this->images);
        }
        if (\is_array($this->news)) {
            Model::validateArray($this->news);
        }
        if (null !== $this->summary) {
            $this->summary->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->images)) {
                $res['Images'] = [];
                $n1            = 0;
                foreach ($this->images as $item1) {
                    $res['Images'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->inputToken) {
            $res['InputToken'] = $this->inputToken;
        }

        if (null !== $this->news) {
            if (\is_array($this->news)) {
                $res['News'] = [];
                $n1          = 0;
                foreach ($this->news as $item1) {
                    $res['News'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->outputToken) {
            $res['OutputToken'] = $this->outputToken;
        }

        if (null !== $this->summary) {
            $res['Summary'] = null !== $this->summary ? $this->summary->toArray($noStream) : $this->summary;
        }

        if (null !== $this->textSummary) {
            $res['TextSummary'] = $this->textSummary;
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
                $n1            = 0;
                foreach ($map['Images'] as $item1) {
                    $model->images[$n1++] = images::fromMap($item1);
                }
            }
        }

        if (isset($map['InputToken'])) {
            $model->inputToken = $map['InputToken'];
        }

        if (isset($map['News'])) {
            if (!empty($map['News'])) {
                $model->news = [];
                $n1          = 0;
                foreach ($map['News'] as $item1) {
                    $model->news[$n1++] = news::fromMap($item1);
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
