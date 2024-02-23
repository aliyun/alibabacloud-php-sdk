<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Tea\Model;

class AddVirtualNumberRelationRequest extends Model
{
    /**
     * @description The company names. Separate multiple company names with commas (,).
     *
     * @example Company 1
     *
     * @var string
     */
    public $corpNameList;

    /**
     * @description The real numbers. Separate multiple real numbers with commas (,).
     *
     * @example 1321111****,1322222****
     *
     * @var string
     */
    public $numberList;

    /**
     * @var int
     */
    public $ownerId;

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
     *   **0**: number location first.
     *   **1**: random.
     *
     * @example 0
     *
     * @var int
     */
    public $routeType;
    protected $_name = [
        'corpNameList'         => 'CorpNameList',
        'numberList'           => 'NumberList',
        'ownerId'              => 'OwnerId',
        'phoneNum'             => 'PhoneNum',
        'prodCode'             => 'ProdCode',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'routeType'            => 'RouteType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->corpNameList) {
            $res['CorpNameList'] = $this->corpNameList;
        }
        if (null !== $this->numberList) {
            $res['NumberList'] = $this->numberList;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->phoneNum) {
            $res['PhoneNum'] = $this->phoneNum;
        }
        if (null !== $this->prodCode) {
            $res['ProdCode'] = $this->prodCode;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddVirtualNumberRelationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CorpNameList'])) {
            $model->corpNameList = $map['CorpNameList'];
        }
        if (isset($map['NumberList'])) {
            $model->numberList = $map['NumberList'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PhoneNum'])) {
            $model->phoneNum = $map['PhoneNum'];
        }
        if (isset($map['ProdCode'])) {
            $model->prodCode = $map['ProdCode'];
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

        return $model;
    }
}
