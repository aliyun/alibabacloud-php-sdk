<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunHotTopicChatResponseBody\payload\output;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunHotTopicChatResponseBody\payload\output\hotTopicSummaries\images;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunHotTopicChatResponseBody\payload\output\hotTopicSummaries\news;

class hotTopicSummaries extends Model
{
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
     * @var images[]
     */
    public $images;

    /**
     * @var news[]
     */
    public $news;

    /**
     * @var string
     */
    public $pubTime;

    /**
     * @var string
     */
    public $textSummary;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'customHotValue' => 'customHotValue',
        'customTextSummary' => 'customTextSummary',
        'hotTopic' => 'hotTopic',
        'hotTopicVersion' => 'hotTopicVersion',
        'hotValue' => 'hotValue',
        'images' => 'images',
        'news' => 'news',
        'pubTime' => 'pubTime',
        'textSummary' => 'textSummary',
        'url' => 'url',
    ];

    public function validate()
    {
        if (\is_array($this->images)) {
            Model::validateArray($this->images);
        }
        if (\is_array($this->news)) {
            Model::validateArray($this->news);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customHotValue) {
            $res['customHotValue'] = $this->customHotValue;
        }

        if (null !== $this->customTextSummary) {
            $res['customTextSummary'] = $this->customTextSummary;
        }

        if (null !== $this->hotTopic) {
            $res['hotTopic'] = $this->hotTopic;
        }

        if (null !== $this->hotTopicVersion) {
            $res['hotTopicVersion'] = $this->hotTopicVersion;
        }

        if (null !== $this->hotValue) {
            $res['hotValue'] = $this->hotValue;
        }

        if (null !== $this->images) {
            if (\is_array($this->images)) {
                $res['images'] = [];
                $n1 = 0;
                foreach ($this->images as $item1) {
                    $res['images'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->news) {
            if (\is_array($this->news)) {
                $res['news'] = [];
                $n1 = 0;
                foreach ($this->news as $item1) {
                    $res['news'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->pubTime) {
            $res['pubTime'] = $this->pubTime;
        }

        if (null !== $this->textSummary) {
            $res['textSummary'] = $this->textSummary;
        }

        if (null !== $this->url) {
            $res['url'] = $this->url;
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
        if (isset($map['customHotValue'])) {
            $model->customHotValue = $map['customHotValue'];
        }

        if (isset($map['customTextSummary'])) {
            $model->customTextSummary = $map['customTextSummary'];
        }

        if (isset($map['hotTopic'])) {
            $model->hotTopic = $map['hotTopic'];
        }

        if (isset($map['hotTopicVersion'])) {
            $model->hotTopicVersion = $map['hotTopicVersion'];
        }

        if (isset($map['hotValue'])) {
            $model->hotValue = $map['hotValue'];
        }

        if (isset($map['images'])) {
            if (!empty($map['images'])) {
                $model->images = [];
                $n1 = 0;
                foreach ($map['images'] as $item1) {
                    $model->images[$n1++] = images::fromMap($item1);
                }
            }
        }

        if (isset($map['news'])) {
            if (!empty($map['news'])) {
                $model->news = [];
                $n1 = 0;
                foreach ($map['news'] as $item1) {
                    $model->news[$n1++] = news::fromMap($item1);
                }
            }
        }

        if (isset($map['pubTime'])) {
            $model->pubTime = $map['pubTime'];
        }

        if (isset($map['textSummary'])) {
            $model->textSummary = $map['textSummary'];
        }

        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
