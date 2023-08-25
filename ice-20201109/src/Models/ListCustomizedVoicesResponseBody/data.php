<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListCustomizedVoicesResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\ListCustomizedVoicesResponseBody\data\customizedVoiceList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var customizedVoiceList[]
     */
    public $customizedVoiceList;

    /**
     * @example 41
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'customizedVoiceList' => 'CustomizedVoiceList',
        'totalCount'          => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customizedVoiceList) {
            $res['CustomizedVoiceList'] = [];
            if (null !== $this->customizedVoiceList && \is_array($this->customizedVoiceList)) {
                $n = 0;
                foreach ($this->customizedVoiceList as $item) {
                    $res['CustomizedVoiceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['CustomizedVoiceList'])) {
            if (!empty($map['CustomizedVoiceList'])) {
                $model->customizedVoiceList = [];
                $n                          = 0;
                foreach ($map['CustomizedVoiceList'] as $item) {
                    $model->customizedVoiceList[$n++] = null !== $item ? customizedVoiceList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
