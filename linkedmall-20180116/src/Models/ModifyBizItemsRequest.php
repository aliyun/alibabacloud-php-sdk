<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\ModifyBizItemsRequest\itemList;
use AlibabaCloud\Tea\Model;

class ModifyBizItemsRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var itemList[]
     */
    public $itemList;

    /**
     * @var string
     */
    public $subBizId;
    protected $_name = [
        'bizId'    => 'BizId',
        'itemList' => 'ItemList',
        'subBizId' => 'SubBizId',
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
        if (null !== $this->itemList) {
            $res['ItemList'] = [];
            if (null !== $this->itemList && \is_array($this->itemList)) {
                $n = 0;
                foreach ($this->itemList as $item) {
                    $res['ItemList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->subBizId) {
            $res['SubBizId'] = $this->subBizId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyBizItemsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['ItemList'])) {
            if (!empty($map['ItemList'])) {
                $model->itemList = [];
                $n               = 0;
                foreach ($map['ItemList'] as $item) {
                    $model->itemList[$n++] = null !== $item ? itemList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SubBizId'])) {
            $model->subBizId = $map['SubBizId'];
        }

        return $model;
    }
}
