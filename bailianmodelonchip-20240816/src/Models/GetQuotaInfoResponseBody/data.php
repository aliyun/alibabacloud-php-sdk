<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\GetQuotaInfoResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $activeLicenseCount;

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
    public $licenseCount;

    /**
     * @var int
     */
    public $maxQps;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var int
     */
    public $purchaseModel;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var int
     */
    public $tokenNumber;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'activeLicenseCount' => 'activeLicenseCount',
        'duration' => 'duration',
        'durationType' => 'durationType',
        'licenseCount' => 'licenseCount',
        'maxQps' => 'maxQps',
        'productKey' => 'productKey',
        'purchaseModel' => 'purchaseModel',
        'tenantId' => 'tenantId',
        'tokenNumber' => 'tokenNumber',
        'userId' => 'userId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activeLicenseCount) {
            $res['activeLicenseCount'] = $this->activeLicenseCount;
        }

        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }

        if (null !== $this->durationType) {
            $res['durationType'] = $this->durationType;
        }

        if (null !== $this->licenseCount) {
            $res['licenseCount'] = $this->licenseCount;
        }

        if (null !== $this->maxQps) {
            $res['maxQps'] = $this->maxQps;
        }

        if (null !== $this->productKey) {
            $res['productKey'] = $this->productKey;
        }

        if (null !== $this->purchaseModel) {
            $res['purchaseModel'] = $this->purchaseModel;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        if (null !== $this->tokenNumber) {
            $res['tokenNumber'] = $this->tokenNumber;
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
        if (isset($map['activeLicenseCount'])) {
            $model->activeLicenseCount = $map['activeLicenseCount'];
        }

        if (isset($map['duration'])) {
            $model->duration = $map['duration'];
        }

        if (isset($map['durationType'])) {
            $model->durationType = $map['durationType'];
        }

        if (isset($map['licenseCount'])) {
            $model->licenseCount = $map['licenseCount'];
        }

        if (isset($map['maxQps'])) {
            $model->maxQps = $map['maxQps'];
        }

        if (isset($map['productKey'])) {
            $model->productKey = $map['productKey'];
        }

        if (isset($map['purchaseModel'])) {
            $model->purchaseModel = $map['purchaseModel'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        if (isset($map['tokenNumber'])) {
            $model->tokenNumber = $map['tokenNumber'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
