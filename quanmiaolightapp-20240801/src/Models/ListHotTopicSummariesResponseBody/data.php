<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\ListHotTopicSummariesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\ListHotTopicSummariesResponseBody\data\news;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\ListHotTopicSummariesResponseBody\data\summary;

class data extends Model
{
    /**
     * @var string
     */
    public $category;
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
     * @var news[]
     */
    public $news;
    /**
     * @var summary
     */
    public $summary;
    /**
     * @var string
     */
    public $textSummary;
    protected $_name = [
        'category'        => 'category',
        'hotTopic'        => 'hotTopic',
        'hotTopicVersion' => 'hotTopicVersion',
        'hotValue'        => 'hotValue',
        'id'              => 'id',
        'news'            => 'news',
        'summary'         => 'summary',
        'textSummary'     => 'textSummary',
    ];

    public function validate()
    {
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
            $res['category'] = $this->category;
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

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->news) {
            if (\is_array($this->news)) {
                $res['news'] = [];
                $n1          = 0;
                foreach ($this->news as $item1) {
                    $res['news'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->summary) {
            $res['summary'] = null !== $this->summary ? $this->summary->toArray($noStream) : $this->summary;
        }

        if (null !== $this->textSummary) {
            $res['textSummary'] = $this->textSummary;
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
        if (isset($map['category'])) {
            $model->category = $map['category'];
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

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['news'])) {
            if (!empty($map['news'])) {
                $model->news = [];
                $n1          = 0;
                foreach ($map['news'] as $item1) {
                    $model->news[$n1++] = news::fromMap($item1);
                }
            }
        }

        if (isset($map['summary'])) {
            $model->summary = summary::fromMap($map['summary']);
        }

        if (isset($map['textSummary'])) {
            $model->textSummary = $map['textSummary'];
        }

        return $model;
    }
}
