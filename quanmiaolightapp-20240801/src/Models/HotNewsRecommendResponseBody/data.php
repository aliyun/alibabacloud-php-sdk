<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\HotNewsRecommendResponseBody;

use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\HotNewsRecommendResponseBody\data\news;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var news[]
     */
    public $news;
    protected $_name = [
        'news' => 'news',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->news) {
            $res['news'] = [];
            if (null !== $this->news && \is_array($this->news)) {
                $n = 0;
                foreach ($this->news as $item) {
                    $res['news'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['news'])) {
            if (!empty($map['news'])) {
                $model->news = [];
                $n = 0;
                foreach ($map['news'] as $item) {
                    $model->news[$n++] = null !== $item ? news::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
