<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\HotNewsRecommendResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\HotNewsRecommendResponseBody\data\news;

class data extends Model
{
    /**
     * @var news[]
     */
    public $news;
    protected $_name = [
        'news' => 'news',
    ];

    public function validate()
    {
        if (\is_array($this->news)) {
            Model::validateArray($this->news);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->news) {
            if (\is_array($this->news)) {
                $res['news'] = [];
                $n1 = 0;
                foreach ($this->news as $item1) {
                    $res['news'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['news'])) {
            if (!empty($map['news'])) {
                $model->news = [];
                $n1 = 0;
                foreach ($map['news'] as $item1) {
                    $model->news[$n1] = news::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
