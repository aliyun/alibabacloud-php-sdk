<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelRoomInfoResponseBody\module;

use AlibabaCloud\Tea\Model;

class roomImages extends Model
{
    /**
     * @var string
     */
    public $bedInfos2;

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
        'bedInfos2' => 'bed_infos2',
        'tag'       => 'tag',
        'url'       => 'url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bedInfos2) {
            $res['bed_infos2'] = $this->bedInfos2;
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
     * @return roomImages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bed_infos2'])) {
            $model->bedInfos2 = $map['bed_infos2'];
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
