<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelSuggestV2ResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelSuggestV2ResponseBody\module\guessSuggestInfos;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelSuggestV2ResponseBody\module\keywordSuggestInfos;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelSuggestV2ResponseBody\module\popularSuggestInfos;

class module extends Model
{
    /**
     * @var guessSuggestInfos[]
     */
    public $guessSuggestInfos;

    /**
     * @var keywordSuggestInfos[]
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
        'guessSuggestInfos' => 'guess_suggest_infos',
        'keywordSuggestInfos' => 'keyword_suggest_infos',
        'popularSuggestInfos' => 'popular_suggest_infos',
        'tips' => 'tips',
    ];

    public function validate()
    {
        if (\is_array($this->guessSuggestInfos)) {
            Model::validateArray($this->guessSuggestInfos);
        }
        if (\is_array($this->keywordSuggestInfos)) {
            Model::validateArray($this->keywordSuggestInfos);
        }
        if (\is_array($this->popularSuggestInfos)) {
            Model::validateArray($this->popularSuggestInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->guessSuggestInfos) {
            if (\is_array($this->guessSuggestInfos)) {
                $res['guess_suggest_infos'] = [];
                $n1 = 0;
                foreach ($this->guessSuggestInfos as $item1) {
                    $res['guess_suggest_infos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->keywordSuggestInfos) {
            if (\is_array($this->keywordSuggestInfos)) {
                $res['keyword_suggest_infos'] = [];
                $n1 = 0;
                foreach ($this->keywordSuggestInfos as $item1) {
                    $res['keyword_suggest_infos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->popularSuggestInfos) {
            if (\is_array($this->popularSuggestInfos)) {
                $res['popular_suggest_infos'] = [];
                $n1 = 0;
                foreach ($this->popularSuggestInfos as $item1) {
                    $res['popular_suggest_infos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->tips) {
            $res['tips'] = $this->tips;
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
        if (isset($map['guess_suggest_infos'])) {
            if (!empty($map['guess_suggest_infos'])) {
                $model->guessSuggestInfos = [];
                $n1 = 0;
                foreach ($map['guess_suggest_infos'] as $item1) {
                    $model->guessSuggestInfos[$n1++] = guessSuggestInfos::fromMap($item1);
                }
            }
        }

        if (isset($map['keyword_suggest_infos'])) {
            if (!empty($map['keyword_suggest_infos'])) {
                $model->keywordSuggestInfos = [];
                $n1 = 0;
                foreach ($map['keyword_suggest_infos'] as $item1) {
                    $model->keywordSuggestInfos[$n1++] = keywordSuggestInfos::fromMap($item1);
                }
            }
        }

        if (isset($map['popular_suggest_infos'])) {
            if (!empty($map['popular_suggest_infos'])) {
                $model->popularSuggestInfos = [];
                $n1 = 0;
                foreach ($map['popular_suggest_infos'] as $item1) {
                    $model->popularSuggestInfos[$n1++] = popularSuggestInfos::fromMap($item1);
                }
            }
        }

        if (isset($map['tips'])) {
            $model->tips = $map['tips'];
        }

        return $model;
    }
}
