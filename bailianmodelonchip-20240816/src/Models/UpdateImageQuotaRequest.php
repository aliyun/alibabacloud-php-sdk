<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models;

use AlibabaCloud\Dara\Model;

class UpdateImageQuotaRequest extends Model
{
    /**
     * @var int
     */
    public $duration;

    /**
     * @var int
     */
    public $durationType;

    /**
     * @var int
     */
    public $imageCount;

    /**
     * @var int
     */
    public $licenseCount;

    /**
     * @var int
     */
    public $packageType;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var int
     */
    public $purchaseType;

    /**
     * @var int
     */
    public $recordId;

    /**
     * @var float
     */
    public $settlementAmount;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var float
     */
    public $unitPrice;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'duration' => 'duration',
        'durationType' => 'durationType',
        'imageCount' => 'imageCount',
        'licenseCount' => 'licenseCount',
        'packageType' => 'packageType',
        'productKey' => 'productKey',
        'purchaseType' => 'purchaseType',
        'recordId' => 'recordId',
        'settlementAmount' => 'settlementAmount',
        'tenantId' => 'tenantId',
        'unitPrice' => 'unitPrice',
        'userId' => 'userId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }

        if (null !== $this->durationType) {
            $res['durationType'] = $this->durationType;
        }

        if (null !== $this->imageCount) {
            $res['imageCount'] = $this->imageCount;
        }

        if (null !== $this->licenseCount) {
            $res['licenseCount'] = $this->licenseCount;
        }

        if (null !== $this->packageType) {
            $res['packageType'] = $this->packageType;
        }

        if (null !== $this->productKey) {
            $res['productKey'] = $this->productKey;
        }

        if (null !== $this->purchaseType) {
            $res['purchaseType'] = $this->purchaseType;
        }

        if (null !== $this->recordId) {
            $res['recordId'] = $this->recordId;
        }

        if (null !== $this->settlementAmount) {
            $res['settlementAmount'] = $this->settlementAmount;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        if (null !== $this->unitPrice) {
            $res['unitPrice'] = $this->unitPrice;
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
        if (isset($map['duration'])) {
            $model->duration = $map['duration'];
        }

        if (isset($map['durationType'])) {
            $model->durationType = $map['durationType'];
        }

        if (isset($map['imageCount'])) {
            $model->imageCount = $map['imageCount'];
        }

        if (isset($map['licenseCount'])) {
            $model->licenseCount = $map['licenseCount'];
        }

        if (isset($map['packageType'])) {
            $model->packageType = $map['packageType'];
        }

        if (isset($map['productKey'])) {
            $model->productKey = $map['productKey'];
        }

        if (isset($map['purchaseType'])) {
            $model->purchaseType = $map['purchaseType'];
        }

        if (isset($map['recordId'])) {
            $model->recordId = $map['recordId'];
        }

        if (isset($map['settlementAmount'])) {
            $model->settlementAmount = $map['settlementAmount'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        if (isset($map['unitPrice'])) {
            $model->unitPrice = $map['unitPrice'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
