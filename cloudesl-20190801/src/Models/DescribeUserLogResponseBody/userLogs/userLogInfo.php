<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20190801\Models\DescribeUserLogResponseBody\userLogs;

use AlibabaCloud\Tea\Model;

class userLogInfo extends Model
{
    /**
     * @var string
     */
    public $eslBarCode;

    /**
     * @var int
     */
    public $itemActionPrice;

    /**
     * @var string
     */
    public $itemBarCode;

    /**
     * @var int
     */
    public $itemId;

    /**
     * @var string
     */
    public $itemTitle;

    /**
     * @var string
     */
    public $mac;

    /**
     * @var string
     */
    public $operateStatus;

    /**
     * @var string
     */
    public $operateTime;

    /**
     * @var string
     */
    public $operateType;

    /**
     * @var int
     */
    public $operateUserId;

    /**
     * @var string
     */
    public $shelfCode;

    /**
     * @var string
     */
    public $storeId;
    protected $_name = [
        'eslBarCode'      => 'EslBarCode',
        'itemActionPrice' => 'ItemActionPrice',
        'itemBarCode'     => 'ItemBarCode',
        'itemId'          => 'ItemId',
        'itemTitle'       => 'ItemTitle',
        'mac'             => 'Mac',
        'operateStatus'   => 'OperateStatus',
        'operateTime'     => 'OperateTime',
        'operateType'     => 'OperateType',
        'operateUserId'   => 'OperateUserId',
        'shelfCode'       => 'ShelfCode',
        'storeId'         => 'StoreId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eslBarCode) {
            $res['EslBarCode'] = $this->eslBarCode;
        }
        if (null !== $this->itemActionPrice) {
            $res['ItemActionPrice'] = $this->itemActionPrice;
        }
        if (null !== $this->itemBarCode) {
            $res['ItemBarCode'] = $this->itemBarCode;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->itemTitle) {
            $res['ItemTitle'] = $this->itemTitle;
        }
        if (null !== $this->mac) {
            $res['Mac'] = $this->mac;
        }
        if (null !== $this->operateStatus) {
            $res['OperateStatus'] = $this->operateStatus;
        }
        if (null !== $this->operateTime) {
            $res['OperateTime'] = $this->operateTime;
        }
        if (null !== $this->operateType) {
            $res['OperateType'] = $this->operateType;
        }
        if (null !== $this->operateUserId) {
            $res['OperateUserId'] = $this->operateUserId;
        }
        if (null !== $this->shelfCode) {
            $res['ShelfCode'] = $this->shelfCode;
        }
        if (null !== $this->storeId) {
            $res['StoreId'] = $this->storeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userLogInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EslBarCode'])) {
            $model->eslBarCode = $map['EslBarCode'];
        }
        if (isset($map['ItemActionPrice'])) {
            $model->itemActionPrice = $map['ItemActionPrice'];
        }
        if (isset($map['ItemBarCode'])) {
            $model->itemBarCode = $map['ItemBarCode'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['ItemTitle'])) {
            $model->itemTitle = $map['ItemTitle'];
        }
        if (isset($map['Mac'])) {
            $model->mac = $map['Mac'];
        }
        if (isset($map['OperateStatus'])) {
            $model->operateStatus = $map['OperateStatus'];
        }
        if (isset($map['OperateTime'])) {
            $model->operateTime = $map['OperateTime'];
        }
        if (isset($map['OperateType'])) {
            $model->operateType = $map['OperateType'];
        }
        if (isset($map['OperateUserId'])) {
            $model->operateUserId = $map['OperateUserId'];
        }
        if (isset($map['ShelfCode'])) {
            $model->shelfCode = $map['ShelfCode'];
        }
        if (isset($map['StoreId'])) {
            $model->storeId = $map['StoreId'];
        }

        return $model;
    }
}
