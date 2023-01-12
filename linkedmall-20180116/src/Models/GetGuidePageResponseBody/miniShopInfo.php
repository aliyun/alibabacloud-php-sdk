<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\GetGuidePageResponseBody;

use AlibabaCloud\Tea\Model;

class miniShopInfo extends Model
{
    /**
     * @example LMALL20211012****
     *
     * @var string
     */
    public $bizId;

    /**
     * @example 10000001
     *
     * @var string
     */
    public $liteShopId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $src;
    protected $_name = [
        'bizId'      => 'BizId',
        'liteShopId' => 'LiteShopId',
        'name'       => 'Name',
        'src'        => 'Src',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->liteShopId) {
            $res['LiteShopId'] = $this->liteShopId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->src) {
            $res['Src'] = $this->src;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return miniShopInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['LiteShopId'])) {
            $model->liteShopId = $map['LiteShopId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Src'])) {
            $model->src = $map['Src'];
        }

        return $model;
    }
}
