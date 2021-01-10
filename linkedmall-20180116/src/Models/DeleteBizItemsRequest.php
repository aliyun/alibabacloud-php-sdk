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
     * @var string
     */
    public $subBizId;

    /**
     * @var int[]
     */
    public $itemIdList;
    protected $_name = [
        'bizId'      => 'BizId',
        'subBizId'   => 'SubBizId',
        'itemIdList' => 'ItemIdList',
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
        if (null !== $this->subBizId) {
            $res['SubBizId'] = $this->subBizId;
        }
        if (null !== $this->itemIdList) {
            $res['ItemIdList'] = $this->itemIdList;
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
        if (isset($map['SubBizId'])) {
            $model->subBizId = $map['SubBizId'];
        }
        if (isset($map['ItemIdList'])) {
            if (!empty($map['ItemIdList'])) {
                $model->itemIdList = $map['ItemIdList'];
            }
        }

        return $model;
    }
}
