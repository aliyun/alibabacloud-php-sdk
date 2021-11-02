<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class DeleteBizItemsRequest extends Model
{
    /**
     * @var string
     */
    public $bizId;

    /**
     * @var int[]
     */
    public $itemIdList;

    /**
     * @var string
     */
    public $subBizId;
    protected $_name = [
        'bizId'      => 'BizId',
        'itemIdList' => 'ItemIdList',
        'subBizId'   => 'SubBizId',
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
        if (null !== $this->itemIdList) {
            $res['ItemIdList'] = $this->itemIdList;
        }
        if (null !== $this->subBizId) {
            $res['SubBizId'] = $this->subBizId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteBizItemsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['ItemIdList'])) {
            if (!empty($map['ItemIdList'])) {
                $model->itemIdList = $map['ItemIdList'];
            }
        }
        if (isset($map['SubBizId'])) {
            $model->subBizId = $map['SubBizId'];
        }

        return $model;
    }
}
