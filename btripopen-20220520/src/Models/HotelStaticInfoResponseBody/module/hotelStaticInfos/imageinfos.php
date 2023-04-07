<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelStaticInfoResponseBody\module\hotelStaticInfos;

use AlibabaCloud\Tea\Model;

class imageinfos extends Model
{
    /**
     * @var string
     */
    public $desc;

    /**
     * @var int
     */
    public $tag;

    /**
     * @example https://img.alicdn.com/imgextra/i3/6000000000003/O1CN01xkZQR41BtPxK1PQCb_!!6000000000003-0-hotel.jpg
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'desc' => 'desc',
        'tag'  => 'tag',
        'url'  => 'url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desc) {
            $res['desc'] = $this->desc;
        }
        if (null !== $this->tag) {
            $res['tag'] = $this->tag;
        }
        if (null !== $this->url) {
            $res['url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageinfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['desc'])) {
            $model->desc = $map['desc'];
        }
        if (isset($map['tag'])) {
            $model->tag = $map['tag'];
        }
        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
