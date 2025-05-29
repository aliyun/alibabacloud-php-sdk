<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\QueryProductQuotaPageResponseBody\data;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var int
     */
    public $durationType;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $ifUnsubscribe;

    /**
     * @var int
     */
    public $ifUsed;

    /**
     * @var int
     */
    public $licenseCount;

    /**
     * @var int
     */
    public $maxQps;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var int
     */
    public $purchaseModel;

    /**
     * @var int
     */
    public $purchaseType;

    /**
     * @var float
     */
    public $settlementFee;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var int
     */
    public $tokenNumber;

    /**
     * @var float
     */
    public $unitPrice;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'createTime' => 'createTime',
        'duration' => 'duration',
        'durationType' => 'durationType',
        'expireTime' => 'expireTime',
        'id' => 'id',
        'ifUnsubscribe' => 'ifUnsubscribe',
        'ifUsed' => 'ifUsed',
        'licenseCount' => 'licenseCount',
        'maxQps' => 'maxQps',
        'orderId' => 'orderId',
        'productKey' => 'productKey',
        'productName' => 'productName',
        'purchaseModel' => 'purchaseModel',
        'purchaseType' => 'purchaseType',
        'settlementFee' => 'settlementFee',
        'tenantId' => 'tenantId',
        'tokenNumber' => 'tokenNumber',
        'unitPrice' => 'unitPrice',
        'updateTime' => 'updateTime',
        'userId' => 'userId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }

        if (null !== $this->durationType) {
            $res['durationType'] = $this->durationType;
        }

        if (null !== $this->expireTime) {
            $res['expireTime'] = $this->expireTime;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->ifUnsubscribe) {
            $res['ifUnsubscribe'] = $this->ifUnsubscribe;
        }

        if (null !== $this->ifUsed) {
            $res['ifUsed'] = $this->ifUsed;
        }

        if (null !== $this->licenseCount) {
            $res['licenseCount'] = $this->licenseCount;
        }

        if (null !== $this->maxQps) {
            $res['maxQps'] = $this->maxQps;
        }

        if (null !== $this->orderId) {
            $res['orderId'] = $this->orderId;
        }

        if (null !== $this->productKey) {
            $res['productKey'] = $this->productKey;
        }

        if (null !== $this->productName) {
            $res['productName'] = $this->productName;
        }

        if (null !== $this->purchaseModel) {
            $res['purchaseModel'] = $this->purchaseModel;
        }

        if (null !== $this->purchaseType) {
            $res['purchaseType'] = $this->purchaseType;
        }

        if (null !== $this->settlementFee) {
            $res['settlementFee'] = $this->settlementFee;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        if (null !== $this->tokenNumber) {
            $res['tokenNumber'] = $this->tokenNumber;
        }

        if (null !== $this->unitPrice) {
            $res['unitPrice'] = $this->unitPrice;
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['duration'])) {
            $model->duration = $map['duration'];
        }

        if (isset($map['durationType'])) {
            $model->durationType = $map['durationType'];
        }

        if (isset($map['expireTime'])) {
            $model->expireTime = $map['expireTime'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['ifUnsubscribe'])) {
            $model->ifUnsubscribe = $map['ifUnsubscribe'];
        }

        if (isset($map['ifUsed'])) {
            $model->ifUsed = $map['ifUsed'];
        }

        if (isset($map['licenseCount'])) {
            $model->licenseCount = $map['licenseCount'];
        }

        if (isset($map['maxQps'])) {
            $model->maxQps = $map['maxQps'];
        }

        if (isset($map['orderId'])) {
            $model->orderId = $map['orderId'];
        }

        if (isset($map['productKey'])) {
            $model->productKey = $map['productKey'];
        }

        if (isset($map['productName'])) {
            $model->productName = $map['productName'];
        }

        if (isset($map['purchaseModel'])) {
            $model->purchaseModel = $map['purchaseModel'];
        }

        if (isset($map['purchaseType'])) {
            $model->purchaseType = $map['purchaseType'];
        }

        if (isset($map['settlementFee'])) {
            $model->settlementFee = $map['settlementFee'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        if (isset($map['tokenNumber'])) {
            $model->tokenNumber = $map['tokenNumber'];
        }

        if (isset($map['unitPrice'])) {
            $model->unitPrice = $map['unitPrice'];
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
