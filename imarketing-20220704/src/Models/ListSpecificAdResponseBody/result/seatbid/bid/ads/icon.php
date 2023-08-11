<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imarketing\V20220704\Models\ListSpecificAdResponseBody\result\seatbid\bid\ads;

use AlibabaCloud\Tea\Model;

class icon extends Model
{
    /**
     * @example https://market.m.taobao.com/app/alicloud-tools/base-h5/index.html?rootId=16022413&appId=100100100100&pageId=page_0d884ec7&BusinessId=yc-165407506207478-165511576113195&preview=true&cid=32
     *
     * @var string
     */
    public $url;
    protected $_name = [
        'url' => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return icon
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
