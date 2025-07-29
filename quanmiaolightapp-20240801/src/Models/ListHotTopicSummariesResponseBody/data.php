<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\ListHotTopicSummariesResponseBody;

use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\ListHotTopicSummariesResponseBody\data\news;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\ListHotTopicSummariesResponseBody\data\summary;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @example xx
     *
     * @var string
     */
    public $hotTopic;

    /**
     * @example 2024-09-13_12
     *
     * @var string
     */
    public $hotTopicVersion;

    /**
     * @example 1000000
     *
     * @var float
     */
    public $hotValue;

    /**
     * @example db5dc5b3d8954a30b65ba700c9dda3bb
     *
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
     * @example xx
     *
     * @var string
     */
    public $textSummary;
    protected $_name = [
        'category' => 'category',
        'hotTopic' => 'hotTopic',
        'hotTopicVersion' => 'hotTopicVersion',
        'hotValue' => 'hotValue',
        'id' => 'id',
        'news' => 'news',
        'summary' => 'summary',
        'textSummary' => 'textSummary',
    ];

    public function validate() {}

    public function toMap()
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
            $res['news'] = [];
            if (null !== $this->news && \is_array($this->news)) {
                $n = 0;
                foreach ($this->news as $item) {
                    $res['news'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->summary) {
            $res['summary'] = null !== $this->summary ? $this->summary->toMap() : null;
        }
        if (null !== $this->textSummary) {
            $res['textSummary'] = $this->textSummary;
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
                $n = 0;
                foreach ($map['news'] as $item) {
                    $model->news[$n++] = null !== $item ? news::fromMap($item) : $item;
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
