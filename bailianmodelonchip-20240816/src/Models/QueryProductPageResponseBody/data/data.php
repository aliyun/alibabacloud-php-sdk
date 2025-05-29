<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\QueryProductPageResponseBody\data;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $activeLicenseCount;

    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

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
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $productSecret;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var int
     */
    public $tokenCount;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var int
     */
    public $usedToken;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'activeLicenseCount' => 'activeLicenseCount',
        'apiKey' => 'apiKey',
        'createTime' => 'createTime',
        'description' => 'description',
        'licenseCount' => 'licenseCount',
        'maxQps' => 'maxQps',
        'productKey' => 'productKey',
        'productName' => 'productName',
        'productSecret' => 'productSecret',
        'tenantId' => 'tenantId',
        'tokenCount' => 'tokenCount',
        'updateTime' => 'updateTime',
        'usedToken' => 'usedToken',
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

        if (null !== $this->apiKey) {
            $res['apiKey'] = $this->apiKey;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
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

        if (null !== $this->productName) {
            $res['productName'] = $this->productName;
        }

        if (null !== $this->productSecret) {
            $res['productSecret'] = $this->productSecret;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        if (null !== $this->tokenCount) {
            $res['tokenCount'] = $this->tokenCount;
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }

        if (null !== $this->usedToken) {
            $res['usedToken'] = $this->usedToken;
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

        if (isset($map['apiKey'])) {
            $model->apiKey = $map['apiKey'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
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

        if (isset($map['productName'])) {
            $model->productName = $map['productName'];
        }

        if (isset($map['productSecret'])) {
            $model->productSecret = $map['productSecret'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        if (isset($map['tokenCount'])) {
            $model->tokenCount = $map['tokenCount'];
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        if (isset($map['usedToken'])) {
            $model->usedToken = $map['usedToken'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
