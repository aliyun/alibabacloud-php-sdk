<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelSuggestResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelSuggestResponseBody\module\popularSuggestInfos;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\KeywordSuggestInfo;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @var KeywordSuggestInfo[]
     */
    public $guessSuggestInfos;

    /**
     * @var KeywordSuggestInfo[]
     */
    public $keywordSuggestInfos;

    /**
     * @var popularSuggestInfos[]
     */
    public $popularSuggestInfos;

    /**
     * @var string
     */
    public $tips;
    protected $_name = [
        'guessSuggestInfos'   => 'guess_suggest_infos',
        'keywordSuggestInfos' => 'keyword_suggest_infos',
        'popularSuggestInfos' => 'popular_suggest_infos',
        'tips'                => 'tips',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->guessSuggestInfos) {
            $res['guess_suggest_infos'] = [];
            if (null !== $this->guessSuggestInfos && \is_array($this->guessSuggestInfos)) {
                $n = 0;
                foreach ($this->guessSuggestInfos as $item) {
                    $res['guess_suggest_infos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->keywordSuggestInfos) {
            $res['keyword_suggest_infos'] = [];
            if (null !== $this->keywordSuggestInfos && \is_array($this->keywordSuggestInfos)) {
                $n = 0;
                foreach ($this->keywordSuggestInfos as $item) {
                    $res['keyword_suggest_infos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->popularSuggestInfos) {
            $res['popular_suggest_infos'] = [];
            if (null !== $this->popularSuggestInfos && \is_array($this->popularSuggestInfos)) {
                $n = 0;
                foreach ($this->popularSuggestInfos as $item) {
                    $res['popular_suggest_infos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->tips) {
            $res['tips'] = $this->tips;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['guess_suggest_infos'])) {
            if (!empty($map['guess_suggest_infos'])) {
                $model->guessSuggestInfos = [];
                $n                        = 0;
                foreach ($map['guess_suggest_infos'] as $item) {
                    $model->guessSuggestInfos[$n++] = null !== $item ? KeywordSuggestInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['keyword_suggest_infos'])) {
            if (!empty($map['keyword_suggest_infos'])) {
                $model->keywordSuggestInfos = [];
                $n                          = 0;
                foreach ($map['keyword_suggest_infos'] as $item) {
                    $model->keywordSuggestInfos[$n++] = null !== $item ? KeywordSuggestInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['popular_suggest_infos'])) {
            if (!empty($map['popular_suggest_infos'])) {
                $model->popularSuggestInfos = [];
                $n                          = 0;
                foreach ($map['popular_suggest_infos'] as $item) {
                    $model->popularSuggestInfos[$n++] = null !== $item ? popularSuggestInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['tips'])) {
            $model->tips = $map['tips'];
        }

        return $model;
    }
}
