<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20190801\Models;

use AlibabaCloud\Tea\Model;

class DescribeEslDevicesRequest extends Model
{
    /**
     * @var bool
     */
    public $beBind;

    /**
     * @var string
     */
    public $eslBarCode;

    /**
     * @var string
     */
    public $eslStatus;

    /**
     * @var int
     */
    public $fromBatteryLevel;

    /**
     * @var string
     */
    public $itemBarCode;

    /**
     * @var string
     */
    public $mac;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $shelfCode;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $storeId;

    /**
     * @var int
     */
    public $toBatteryLevel;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $vendor;
    protected $_name = [
        'beBind'           => 'BeBind',
        'eslBarCode'       => 'EslBarCode',
        'eslStatus'        => 'EslStatus',
        'fromBatteryLevel' => 'FromBatteryLevel',
        'itemBarCode'      => 'ItemBarCode',
        'mac'              => 'Mac',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'shelfCode'        => 'ShelfCode',
        'storeId'          => 'StoreId',
        'toBatteryLevel'   => 'ToBatteryLevel',
        'type'             => 'Type',
        'vendor'           => 'Vendor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beBind) {
            $res['BeBind'] = $this->beBind;
        }
        if (null !== $this->eslBarCode) {
            $res['EslBarCode'] = $this->eslBarCode;
        }
        if (null !== $this->eslStatus) {
            $res['EslStatus'] = $this->eslStatus;
        }
        if (null !== $this->fromBatteryLevel) {
            $res['FromBatteryLevel'] = $this->fromBatteryLevel;
        }
        if (null !== $this->itemBarCode) {
            $res['ItemBarCode'] = $this->itemBarCode;
        }
        if (null !== $this->mac) {
            $res['Mac'] = $this->mac;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->shelfCode) {
            $res['ShelfCode'] = $this->shelfCode;
        }
        if (null !== $this->storeId) {
            $res['StoreId'] = $this->storeId;
        }
        if (null !== $this->toBatteryLevel) {
            $res['ToBatteryLevel'] = $this->toBatteryLevel;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEslDevicesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeBind'])) {
            $model->beBind = $map['BeBind'];
        }
        if (isset($map['EslBarCode'])) {
            $model->eslBarCode = $map['EslBarCode'];
        }
        if (isset($map['EslStatus'])) {
            $model->eslStatus = $map['EslStatus'];
        }
        if (isset($map['FromBatteryLevel'])) {
            $model->fromBatteryLevel = $map['FromBatteryLevel'];
        }
        if (isset($map['ItemBarCode'])) {
            $model->itemBarCode = $map['ItemBarCode'];
        }
        if (isset($map['Mac'])) {
            $model->mac = $map['Mac'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ShelfCode'])) {
            $model->shelfCode = $map['ShelfCode'];
        }
        if (isset($map['StoreId'])) {
            $model->storeId = $map['StoreId'];
        }
        if (isset($map['ToBatteryLevel'])) {
            $model->toBatteryLevel = $map['ToBatteryLevel'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
