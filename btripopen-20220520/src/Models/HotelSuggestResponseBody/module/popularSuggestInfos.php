<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelSuggestResponseBody\module;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelSuggestResponseBody\module\popularSuggestInfos\popularInfos;
use AlibabaCloud\Tea\Model;

class popularSuggestInfos extends Model
{
    /**
     * @example https://gw.alicdn.com/imgextra/i1/O1CN01bwXBj71paiJolualE_!!6000000005377-2-tps-54-54.png
     *
     * @var string
     */
    public $icon;

    /**
     * @var popularInfos[]
     */
    public $popularInfos;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'icon'         => 'icon',
        'popularInfos' => 'popular_infos',
        'title'        => 'title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->icon) {
            $res['icon'] = $this->icon;
        }
        if (null !== $this->popularInfos) {
            $res['popular_infos'] = [];
            if (null !== $this->popularInfos && \is_array($this->popularInfos)) {
                $n = 0;
                foreach ($this->popularInfos as $item) {
                    $res['popular_infos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return popularSuggestInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['icon'])) {
            $model->icon = $map['icon'];
        }
        if (isset($map['popular_infos'])) {
            if (!empty($map['popular_infos'])) {
                $model->popularInfos = [];
                $n                   = 0;
                foreach ($map['popular_infos'] as $item) {
                    $model->popularInfos[$n++] = null !== $item ? popularInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
