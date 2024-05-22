<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20190801\Models\DescribeEslDevicesResponseBody\eslDevices;

use AlibabaCloud\Tea\Model;

class eslDeviceInfo extends Model
{
    /**
     * @var int
     */
    public $batteryLevel;

    /**
     * @var bool
     */
    public $beBind;

    /**
     * @var string
     */
    public $companyId;

    /**
     * @var string
     */
    public $connectAp;

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
    public $itemPriceUnit;

    /**
     * @var string
     */
    public $itemTitle;

    /**
     * @var string
     */
    public $lastCommunicateTime;

    /**
     * @var string
     */
    public $mac;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $positionCode;

    /**
     * @var int
     */
    public $screenHeight;

    /**
     * @var int
     */
    public $screenWidth;

    /**
     * @var string
     */
    public $shelfCode;

    /**
     * @var string
     */
    public $storeId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $vendor;
    protected $_name = [
        'batteryLevel'        => 'BatteryLevel',
        'beBind'              => 'BeBind',
        'companyId'           => 'CompanyId',
        'connectAp'           => 'ConnectAp',
        'eslBarCode'          => 'EslBarCode',
        'eslStatus'           => 'EslStatus',
        'itemActionPrice'     => 'ItemActionPrice',
        'itemBarCode'         => 'ItemBarCode',
        'itemId'              => 'ItemId',
        'itemPriceUnit'       => 'ItemPriceUnit',
        'itemTitle'           => 'ItemTitle',
        'lastCommunicateTime' => 'LastCommunicateTime',
        'mac'                 => 'Mac',
        'model'               => 'Model',
        'positionCode'        => 'PositionCode',
        'screenHeight'        => 'ScreenHeight',
        'screenWidth'         => 'ScreenWidth',
        'shelfCode'           => 'ShelfCode',
        'storeId'             => 'StoreId',
        'type'                => 'Type',
        'vendor'              => 'Vendor',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batteryLevel) {
            $res['BatteryLevel'] = $this->batteryLevel;
        }
        if (null !== $this->beBind) {
            $res['BeBind'] = $this->beBind;
        }
        if (null !== $this->companyId) {
            $res['CompanyId'] = $this->companyId;
        }
        if (null !== $this->connectAp) {
            $res['ConnectAp'] = $this->connectAp;
        }
        if (null !== $this->eslBarCode) {
            $res['EslBarCode'] = $this->eslBarCode;
        }
        if (null !== $this->eslStatus) {
            $res['EslStatus'] = $this->eslStatus;
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
        if (null !== $this->itemPriceUnit) {
            $res['ItemPriceUnit'] = $this->itemPriceUnit;
        }
        if (null !== $this->itemTitle) {
            $res['ItemTitle'] = $this->itemTitle;
        }
        if (null !== $this->lastCommunicateTime) {
            $res['LastCommunicateTime'] = $this->lastCommunicateTime;
        }
        if (null !== $this->mac) {
            $res['Mac'] = $this->mac;
        }
        if (null !== $this->model) {
            $res['Model'] = $this->model;
        }
        if (null !== $this->positionCode) {
            $res['PositionCode'] = $this->positionCode;
        }
        if (null !== $this->screenHeight) {
            $res['ScreenHeight'] = $this->screenHeight;
        }
        if (null !== $this->screenWidth) {
            $res['ScreenWidth'] = $this->screenWidth;
        }
        if (null !== $this->shelfCode) {
            $res['ShelfCode'] = $this->shelfCode;
        }
        if (null !== $this->storeId) {
            $res['StoreId'] = $this->storeId;
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
     * @return eslDeviceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatteryLevel'])) {
            $model->batteryLevel = $map['BatteryLevel'];
        }
        if (isset($map['BeBind'])) {
            $model->beBind = $map['BeBind'];
        }
        if (isset($map['CompanyId'])) {
            $model->companyId = $map['CompanyId'];
        }
        if (isset($map['ConnectAp'])) {
            $model->connectAp = $map['ConnectAp'];
        }
        if (isset($map['EslBarCode'])) {
            $model->eslBarCode = $map['EslBarCode'];
        }
        if (isset($map['EslStatus'])) {
            $model->eslStatus = $map['EslStatus'];
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
        if (isset($map['ItemPriceUnit'])) {
            $model->itemPriceUnit = $map['ItemPriceUnit'];
        }
        if (isset($map['ItemTitle'])) {
            $model->itemTitle = $map['ItemTitle'];
        }
        if (isset($map['LastCommunicateTime'])) {
            $model->lastCommunicateTime = $map['LastCommunicateTime'];
        }
        if (isset($map['Mac'])) {
            $model->mac = $map['Mac'];
        }
        if (isset($map['Model'])) {
            $model->model = $map['Model'];
        }
        if (isset($map['PositionCode'])) {
            $model->positionCode = $map['PositionCode'];
        }
        if (isset($map['ScreenHeight'])) {
            $model->screenHeight = $map['ScreenHeight'];
        }
        if (isset($map['ScreenWidth'])) {
            $model->screenWidth = $map['ScreenWidth'];
        }
        if (isset($map['ShelfCode'])) {
            $model->shelfCode = $map['ShelfCode'];
        }
        if (isset($map['StoreId'])) {
            $model->storeId = $map['StoreId'];
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
