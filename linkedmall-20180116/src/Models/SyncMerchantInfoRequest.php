<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models;

use AlibabaCloud\Tea\Model;

class SyncMerchantInfoRequest extends Model
{
    /**
     * @example LMALL20******002
     *
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $itemList;

    /**
     * @var string
     */
    public $sellerNick;

    /**
     * @example 1****3
     *
     * @var string
     */
    public $taskId;

    /**
     * @example 1639540484044
     *
     * @var int
     */
    public $timeStamp;
    protected $_name = [
        'bizId'      => 'BizId',
        'itemList'   => 'ItemList',
        'sellerNick' => 'SellerNick',
        'taskId'     => 'TaskId',
        'timeStamp'  => 'TimeStamp',
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
            $res['ItemList'] = $this->itemList;
        }
        if (null !== $this->sellerNick) {
            $res['SellerNick'] = $this->sellerNick;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SyncMerchantInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['ItemList'])) {
            $model->itemList = $map['ItemList'];
        }
        if (isset($map['SellerNick'])) {
            $model->sellerNick = $map['SellerNick'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }

        return $model;
    }
}
