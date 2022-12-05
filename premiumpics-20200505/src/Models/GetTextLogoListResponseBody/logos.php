<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Premiumpics\V20200505\Models\GetTextLogoListResponseBody;

use AlibabaCloud\Tea\Model;

class logos extends Model
{
    /**
     * @var string
     */
    public $goodsId;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'goodsId' => 'GoodsId',
        'url'     => 'Url',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->goodsId) {
            $res['GoodsId'] = $this->goodsId;
        }
        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GoodsId'])) {
            $model->goodsId = $map['GoodsId'];
        }
        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
