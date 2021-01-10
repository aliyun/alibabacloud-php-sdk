<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\GetGuidePageResponseBody;

use AlibabaCloud\Tea\Model;

class miniShopInfo extends Model
{
    /**
     * @var string
     */
    public $liteShopId;

    /**
     * @var string
     */
    public $src;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'liteShopId' => 'LiteShopId',
        'src'        => 'Src',
        'bizId'      => 'BizId',
        'name'       => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->liteShopId) {
            $res['LiteShopId'] = $this->liteShopId;
        }
        if (null !== $this->src) {
            $res['Src'] = $this->src;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['LiteShopId'])) {
            $model->liteShopId = $map['LiteShopId'];
        }
        if (isset($map['Src'])) {
            $model->src = $map['Src'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
