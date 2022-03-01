<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ivpd\V20190625\Models\HighlightGameVideoResponseBody;

use AlibabaCloud\SDK\Ivpd\V20190625\Models\HighlightGameVideoResponseBody\data\gameList;
use AlibabaCloud\SDK\Ivpd\V20190625\Models\HighlightGameVideoResponseBody\data\highlightList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var gameList[]
     */
    public $gameList;

    /**
     * @var highlightList[]
     */
    public $highlightList;
    protected $_name = [
        'gameList'      => 'GameList',
        'highlightList' => 'HighlightList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gameList) {
            $res['GameList'] = [];
            if (null !== $this->gameList && \is_array($this->gameList)) {
                $n = 0;
                foreach ($this->gameList as $item) {
                    $res['GameList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->highlightList) {
            $res['HighlightList'] = [];
            if (null !== $this->highlightList && \is_array($this->highlightList)) {
                $n = 0;
                foreach ($this->highlightList as $item) {
                    $res['HighlightList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['GameList'])) {
            if (!empty($map['GameList'])) {
                $model->gameList = [];
                $n               = 0;
                foreach ($map['GameList'] as $item) {
                    $model->gameList[$n++] = null !== $item ? gameList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['HighlightList'])) {
            if (!empty($map['HighlightList'])) {
                $model->highlightList = [];
                $n                    = 0;
                foreach ($map['HighlightList'] as $item) {
                    $model->highlightList[$n++] = null !== $item ? highlightList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
