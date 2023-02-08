<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models\VerifyAdvertisingResponseBody\result\seatbid\bid\ads;

use AlibabaCloud\Tea\Model;

class images extends Model
{
    /**
     * @example caozhen_test
     *
     * @var string
     */
    public $desc;

    /**
     * @example JPEG
     *
     * @var string
     */
    public $format;

    /**
     * @example https://market.m.taobao.com/app/alicloud-tools/base-h5/index.html?rootId=16022413&appId=100100100100&pageId=page_63b9b362&BusinessId=yc-165407506207478-165511576113195&preview=true&cid=31
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'desc'   => 'Desc',
        'format' => 'Format',
        'url'    => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return images
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
