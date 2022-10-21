<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListBusinessSpacesResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var string
     */
    public $businessSpaceCode;

    /**
     * @var string
     */
    public $businessSpaceName;

    /**
     * @var int
     */
    public $currentStatus;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $language;

    /**
     * @var int
     */
    public $loginUserType;

    /**
     * @var string
     */
    public $orderInstanceId;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $roleName;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var int
     */
    public $subAliUid;

    /**
     * @var string
     */
    public $xspaceCommodityCode;

    /**
     * @var string
     */
    public $xspaceProductCode;
    protected $_name = [
        'aliUid'              => 'AliUid',
        'businessSpaceCode'   => 'BusinessSpaceCode',
        'businessSpaceName'   => 'BusinessSpaceName',
        'currentStatus'       => 'CurrentStatus',
        'endTime'             => 'EndTime',
        'id'                  => 'Id',
        'language'            => 'Language',
        'loginUserType'       => 'LoginUserType',
        'orderInstanceId'     => 'OrderInstanceId',
        'productType'         => 'ProductType',
        'roleName'            => 'RoleName',
        'startTime'           => 'StartTime',
        'subAliUid'           => 'SubAliUid',
        'xspaceCommodityCode' => 'XspaceCommodityCode',
        'xspaceProductCode'   => 'XspaceProductCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->businessSpaceCode) {
            $res['BusinessSpaceCode'] = $this->businessSpaceCode;
        }
        if (null !== $this->businessSpaceName) {
            $res['BusinessSpaceName'] = $this->businessSpaceName;
        }
        if (null !== $this->currentStatus) {
            $res['CurrentStatus'] = $this->currentStatus;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->loginUserType) {
            $res['LoginUserType'] = $this->loginUserType;
        }
        if (null !== $this->orderInstanceId) {
            $res['OrderInstanceId'] = $this->orderInstanceId;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->subAliUid) {
            $res['SubAliUid'] = $this->subAliUid;
        }
        if (null !== $this->xspaceCommodityCode) {
            $res['XspaceCommodityCode'] = $this->xspaceCommodityCode;
        }
        if (null !== $this->xspaceProductCode) {
            $res['XspaceProductCode'] = $this->xspaceProductCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['BusinessSpaceCode'])) {
            $model->businessSpaceCode = $map['BusinessSpaceCode'];
        }
        if (isset($map['BusinessSpaceName'])) {
            $model->businessSpaceName = $map['BusinessSpaceName'];
        }
        if (isset($map['CurrentStatus'])) {
            $model->currentStatus = $map['CurrentStatus'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['LoginUserType'])) {
            $model->loginUserType = $map['LoginUserType'];
        }
        if (isset($map['OrderInstanceId'])) {
            $model->orderInstanceId = $map['OrderInstanceId'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['SubAliUid'])) {
            $model->subAliUid = $map['SubAliUid'];
        }
        if (isset($map['XspaceCommodityCode'])) {
            $model->xspaceCommodityCode = $map['XspaceCommodityCode'];
        }
        if (isset($map['XspaceProductCode'])) {
            $model->xspaceProductCode = $map['XspaceProductCode'];
        }

        return $model;
    }
}
