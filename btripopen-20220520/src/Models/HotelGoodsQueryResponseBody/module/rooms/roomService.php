<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelGoodsQueryResponseBody\module\rooms;

use AlibabaCloud\Dara\Model;

class roomService extends Model
{
    /**
     * @var string
     */
    public $color;

    /**
     * @var string
     */
    public $desc;

    /**
     * @var string
     */
    public $highlightColorColor;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'color' => 'color',
        'desc' => 'desc',
        'highlightColorColor' => 'highlight_color_color',
        'title' => 'title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->color) {
            $res['color'] = $this->color;
        }

        if (null !== $this->desc) {
            $res['desc'] = $this->desc;
        }

        if (null !== $this->highlightColorColor) {
            $res['highlight_color_color'] = $this->highlightColorColor;
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
        if (isset($map['color'])) {
            $model->color = $map['color'];
        }

        if (isset($map['desc'])) {
            $model->desc = $map['desc'];
        }

        if (isset($map['highlight_color_color'])) {
            $model->highlightColorColor = $map['highlight_color_color'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
