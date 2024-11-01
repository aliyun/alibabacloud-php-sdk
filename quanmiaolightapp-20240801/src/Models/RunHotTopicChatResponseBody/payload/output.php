<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunHotTopicChatResponseBody\payload;

use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunHotTopicChatResponseBody\payload\output\articles;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunHotTopicChatResponseBody\payload\output\hotTopicSummaries;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\RunHotTopicChatResponseBody\payload\output\multimodalMedias;
use AlibabaCloud\Tea\Model;

class output extends Model
{
    /**
     * @var articles[]
     */
    public $articles;

    /**
     * @var hotTopicSummaries[]
     */
    public $hotTopicSummaries;

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
     * @example xx
     *
     * @var string
     */
    public $text;
    protected $_name = [
        'articles'          => 'articles',
        'hotTopicSummaries' => 'hotTopicSummaries',
        'multimodalMedias'  => 'multimodalMedias',
        'recommendQueries'  => 'recommendQueries',
        'searchQuery'       => 'searchQuery',
        'text'              => 'text',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->articles) {
            $res['articles'] = [];
            if (null !== $this->articles && \is_array($this->articles)) {
                $n = 0;
                foreach ($this->articles as $item) {
                    $res['articles'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->hotTopicSummaries) {
            $res['hotTopicSummaries'] = [];
            if (null !== $this->hotTopicSummaries && \is_array($this->hotTopicSummaries)) {
                $n = 0;
                foreach ($this->hotTopicSummaries as $item) {
                    $res['hotTopicSummaries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->multimodalMedias) {
            $res['multimodalMedias'] = [];
            if (null !== $this->multimodalMedias && \is_array($this->multimodalMedias)) {
                $n = 0;
                foreach ($this->multimodalMedias as $item) {
                    $res['multimodalMedias'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->recommendQueries) {
            $res['recommendQueries'] = $this->recommendQueries;
        }
        if (null !== $this->searchQuery) {
            $res['searchQuery'] = $this->searchQuery;
        }
        if (null !== $this->text) {
            $res['text'] = $this->text;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return output
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['articles'])) {
            if (!empty($map['articles'])) {
                $model->articles = [];
                $n               = 0;
                foreach ($map['articles'] as $item) {
                    $model->articles[$n++] = null !== $item ? articles::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['hotTopicSummaries'])) {
            if (!empty($map['hotTopicSummaries'])) {
                $model->hotTopicSummaries = [];
                $n                        = 0;
                foreach ($map['hotTopicSummaries'] as $item) {
                    $model->hotTopicSummaries[$n++] = null !== $item ? hotTopicSummaries::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['multimodalMedias'])) {
            if (!empty($map['multimodalMedias'])) {
                $model->multimodalMedias = [];
                $n                       = 0;
                foreach ($map['multimodalMedias'] as $item) {
                    $model->multimodalMedias[$n++] = null !== $item ? multimodalMedias::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['recommendQueries'])) {
            if (!empty($map['recommendQueries'])) {
                $model->recommendQueries = $map['recommendQueries'];
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
