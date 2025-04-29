<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelStaticInfoResponseBody\module\hotelStaticInfos;

use AlibabaCloud\Dara\Model;

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
     * @var string
     */
    public $url;
    protected $_name = [
        'desc' => 'desc',
        'tag' => 'tag',
        'url' => 'url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
