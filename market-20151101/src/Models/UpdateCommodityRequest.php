<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Market\V20151101\Models;

use AlibabaCloud\Tea\Model;

class UpdateCommodityRequest extends Model
{
    /**
     * @var string
     */
    public $commodityId;

    /**
     * @var string
     */
    public $content;
    protected $_name = [
        'commodityId' => 'CommodityId',
        'content'     => 'Content',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commodityId) {
            $res['CommodityId'] = $this->commodityId;
        }
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateCommodityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommodityId'])) {
            $model->commodityId = $map['CommodityId'];
        }
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        return $model;
    }
}
