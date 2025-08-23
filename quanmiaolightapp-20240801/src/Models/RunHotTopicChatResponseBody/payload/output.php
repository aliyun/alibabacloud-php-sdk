<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunHotTopicChatResponseBody\payload;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunHotTopicChatResponseBody\payload\output\articles;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunHotTopicChatResponseBody\payload\output\hotTopicSummaries;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunHotTopicChatResponseBody\payload\output\multimodalMedias;

class output extends Model
{
    /**
     * @var articles[]
     */
    public $articles;

    /**
     * @var string
     */
    public $category;

    /**
     * @var hotTopicSummaries[]
     */
    public $hotTopicSummaries;

    /**
     * @var string
     */
    public $keyword;

    /**
     * @var string
     */
    public $location;

    /**
     * @var multimodalMedias[]
     */
    public $multimodalMedias;

    /**
     * @var string[]
     */
    public $recommendQueries;

    /**
     * @var string
     */
    public $searchQuery;

    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'articles' => 'articles',
        'category' => 'category',
        'hotTopicSummaries' => 'hotTopicSummaries',
        'keyword' => 'keyword',
        'location' => 'location',
        'multimodalMedias' => 'multimodalMedias',
        'recommendQueries' => 'recommendQueries',
        'searchQuery' => 'searchQuery',
        'text' => 'text',
    ];

    public function validate()
    {
        if (\is_array($this->articles)) {
            Model::validateArray($this->articles);
        }
        if (\is_array($this->hotTopicSummaries)) {
            Model::validateArray($this->hotTopicSummaries);
        }
        if (\is_array($this->multimodalMedias)) {
            Model::validateArray($this->multimodalMedias);
        }
        if (\is_array($this->recommendQueries)) {
            Model::validateArray($this->recommendQueries);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->articles) {
            if (\is_array($this->articles)) {
                $res['articles'] = [];
                $n1 = 0;
                foreach ($this->articles as $item1) {
                    $res['articles'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->category) {
            $res['category'] = $this->category;
        }

        if (null !== $this->hotTopicSummaries) {
            if (\is_array($this->hotTopicSummaries)) {
                $res['hotTopicSummaries'] = [];
                $n1 = 0;
                foreach ($this->hotTopicSummaries as $item1) {
                    $res['hotTopicSummaries'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->keyword) {
            $res['keyword'] = $this->keyword;
        }

        if (null !== $this->location) {
            $res['location'] = $this->location;
        }

        if (null !== $this->multimodalMedias) {
            if (\is_array($this->multimodalMedias)) {
                $res['multimodalMedias'] = [];
                $n1 = 0;
                foreach ($this->multimodalMedias as $item1) {
                    $res['multimodalMedias'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->recommendQueries) {
            if (\is_array($this->recommendQueries)) {
                $res['recommendQueries'] = [];
                $n1 = 0;
                foreach ($this->recommendQueries as $item1) {
                    $res['recommendQueries'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->searchQuery) {
            $res['searchQuery'] = $this->searchQuery;
        }

        if (null !== $this->text) {
            $res['text'] = $this->text;
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
        if (isset($map['articles'])) {
            if (!empty($map['articles'])) {
                $model->articles = [];
                $n1 = 0;
                foreach ($map['articles'] as $item1) {
                    $model->articles[$n1] = articles::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['category'])) {
            $model->category = $map['category'];
        }

        if (isset($map['hotTopicSummaries'])) {
            if (!empty($map['hotTopicSummaries'])) {
                $model->hotTopicSummaries = [];
                $n1 = 0;
                foreach ($map['hotTopicSummaries'] as $item1) {
                    $model->hotTopicSummaries[$n1] = hotTopicSummaries::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['keyword'])) {
            $model->keyword = $map['keyword'];
        }

        if (isset($map['location'])) {
            $model->location = $map['location'];
        }

        if (isset($map['multimodalMedias'])) {
            if (!empty($map['multimodalMedias'])) {
                $model->multimodalMedias = [];
                $n1 = 0;
                foreach ($map['multimodalMedias'] as $item1) {
                    $model->multimodalMedias[$n1] = multimodalMedias::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['recommendQueries'])) {
            if (!empty($map['recommendQueries'])) {
                $model->recommendQueries = [];
                $n1 = 0;
                foreach ($map['recommendQueries'] as $item1) {
                    $model->recommendQueries[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['searchQuery'])) {
            $model->searchQuery = $map['searchQuery'];
        }

        if (isset($map['text'])) {
            $model->text = $map['text'];
        }

        return $model;
    }
}
