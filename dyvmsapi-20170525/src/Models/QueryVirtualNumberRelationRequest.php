<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class QueryVirtualNumberRelationRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNo;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The virtual number.
     *
     * @example 05516214****
     *
     * @var string
     */
    public $phoneNum;

    /**
     * @description The service name. Default value: **dyvms**.
     *
     * @example dyvms
     *
     * @var string
     */
    public $prodCode;

    /**
     * @description The qualification ID.
     *
     * You can log on to the [Voice Messaging Service console](https://dyvms.console.aliyun.com/overview/home), choose **Qualifications\&Communication Scripts > Qualification Management**, and then click **Details** in the Actions column to view the qualification ID.
     * @example 1000000542****
     *
     * @var int
     */
    public $qualificationId;

    /**
     * @description The city to which the virtual number belongs.
     *
     * @example hangzhou
     *
     * @var string
     */
    public $regionNameCity;

    /**
     * @description The real number.
     *
     * @example 1705559****
     *
     * @var string
     */
    public $relatedNum;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The route type. Valid values:
     *
     **0**: number location first. **1**: random.
     *
     * @example 0
     *
     * @var int
     */
    public $routeType;

    /**
     * @description The number type. Valid values:
     *
     *   **1**: the number provided by a virtual network operator, in the 05710000\*\*\*\* format.
     *   **2**: the number provided by an Internet service provider (ISP).
     *   **3**: a 5-digit phone number that starts with 95.
     *
     * @example 1
     *
     * @var int
     */
    public $specId;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'pageNo'               => 'PageNo',
        'pageSize'             => 'PageSize',
        'phoneNum'             => 'PhoneNum',
        'prodCode'             => 'ProdCode',
        'qualificationId'      => 'QualificationId',
        'regionNameCity'       => 'RegionNameCity',
        'relatedNum'           => 'RelatedNum',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'routeType'            => 'RouteType',
        'specId'               => 'SpecId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->phoneNum) {
            $res['PhoneNum'] = $this->phoneNum;
        }
        if (null !== $this->prodCode) {
            $res['ProdCode'] = $this->prodCode;
        }
        if (null !== $this->qualificationId) {
            $res['QualificationId'] = $this->qualificationId;
        }
        if (null !== $this->regionNameCity) {
            $res['RegionNameCity'] = $this->regionNameCity;
        }
        if (null !== $this->relatedNum) {
            $res['RelatedNum'] = $this->relatedNum;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->routeType) {
            $res['RouteType'] = $this->routeType;
        }
        if (null !== $this->specId) {
            $res['SpecId'] = $this->specId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryVirtualNumberRelationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PhoneNum'])) {
            $model->phoneNum = $map['PhoneNum'];
        }
        if (isset($map['ProdCode'])) {
            $model->prodCode = $map['ProdCode'];
        }
        if (isset($map['QualificationId'])) {
            $model->qualificationId = $map['QualificationId'];
        }
        if (isset($map['RegionNameCity'])) {
            $model->regionNameCity = $map['RegionNameCity'];
        }
        if (isset($map['RelatedNum'])) {
            $model->relatedNum = $map['RelatedNum'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RouteType'])) {
            $model->routeType = $map['RouteType'];
        }
        if (isset($map['SpecId'])) {
            $model->specId = $map['SpecId'];
        }

        return $model;
    }
}
