<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelSuggestV2ResponseBody\module;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelSuggestV2ResponseBody\module\popularSuggestInfos\popularInfos;

class popularSuggestInfos extends Model
{
    /**
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
        'icon' => 'icon',
        'popularInfos' => 'popular_infos',
        'title' => 'title',
    ];

    public function validate()
    {
        if (\is_array($this->popularInfos)) {
            Model::validateArray($this->popularInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->icon) {
            $res['icon'] = $this->icon;
        }

        if (null !== $this->popularInfos) {
            if (\is_array($this->popularInfos)) {
                $res['popular_infos'] = [];
                $n1 = 0;
                foreach ($this->popularInfos as $item1) {
                    $res['popular_infos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
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
        if (isset($map['icon'])) {
            $model->icon = $map['icon'];
        }

        if (isset($map['popular_infos'])) {
            if (!empty($map['popular_infos'])) {
                $model->popularInfos = [];
                $n1 = 0;
                foreach ($map['popular_infos'] as $item1) {
                    $model->popularInfos[$n1++] = popularInfos::fromMap($item1);
                }
            }
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
