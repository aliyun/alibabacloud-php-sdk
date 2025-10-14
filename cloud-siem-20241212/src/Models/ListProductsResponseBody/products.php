<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\ListProductsResponseBody;

use AlibabaCloud\Dara\Model;

class products extends Model
{
    /**
     * @var int
     */
    public $abnormalDataIngestionCount;

    /**
     * @var int
     */
    public $activeTime;

    /**
     * @var bool
     */
    public $allowAddDataIngestion;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var bool
     */
    public $dataIngestionStatus;

    /**
     * @var int
     */
    public $enabledDataIngestionCount;

    /**
     * @var string
     */
    public $productAlias;

    /**
     * @var string
     */
    public $productId;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var int
     */
    public $totalDataIngestionCount;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var string
     */
    public $vendorId;

    /**
     * @var string
     */
    public $vendorName;
    protected $_name = [
        'abnormalDataIngestionCount' => 'AbnormalDataIngestionCount',
        'activeTime' => 'ActiveTime',
        'allowAddDataIngestion' => 'AllowAddDataIngestion',
        'createTime' => 'CreateTime',
        'dataIngestionStatus' => 'DataIngestionStatus',
        'enabledDataIngestionCount' => 'EnabledDataIngestionCount',
        'productAlias' => 'ProductAlias',
        'productId' => 'ProductId',
        'productName' => 'ProductName',
        'productType' => 'ProductType',
        'totalDataIngestionCount' => 'TotalDataIngestionCount',
        'updateTime' => 'UpdateTime',
        'vendorId' => 'VendorId',
        'vendorName' => 'VendorName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->abnormalDataIngestionCount) {
            $res['AbnormalDataIngestionCount'] = $this->abnormalDataIngestionCount;
        }

        if (null !== $this->activeTime) {
            $res['ActiveTime'] = $this->activeTime;
        }

        if (null !== $this->allowAddDataIngestion) {
            $res['AllowAddDataIngestion'] = $this->allowAddDataIngestion;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->dataIngestionStatus) {
            $res['DataIngestionStatus'] = $this->dataIngestionStatus;
        }

        if (null !== $this->enabledDataIngestionCount) {
            $res['EnabledDataIngestionCount'] = $this->enabledDataIngestionCount;
        }

        if (null !== $this->productAlias) {
            $res['ProductAlias'] = $this->productAlias;
        }

        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }

        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }

        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        if (null !== $this->totalDataIngestionCount) {
            $res['TotalDataIngestionCount'] = $this->totalDataIngestionCount;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        if (null !== $this->vendorId) {
            $res['VendorId'] = $this->vendorId;
        }

        if (null !== $this->vendorName) {
            $res['VendorName'] = $this->vendorName;
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
        if (isset($map['AbnormalDataIngestionCount'])) {
            $model->abnormalDataIngestionCount = $map['AbnormalDataIngestionCount'];
        }

        if (isset($map['ActiveTime'])) {
            $model->activeTime = $map['ActiveTime'];
        }

        if (isset($map['AllowAddDataIngestion'])) {
            $model->allowAddDataIngestion = $map['AllowAddDataIngestion'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DataIngestionStatus'])) {
            $model->dataIngestionStatus = $map['DataIngestionStatus'];
        }

        if (isset($map['EnabledDataIngestionCount'])) {
            $model->enabledDataIngestionCount = $map['EnabledDataIngestionCount'];
        }

        if (isset($map['ProductAlias'])) {
            $model->productAlias = $map['ProductAlias'];
        }

        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }

        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }

        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        if (isset($map['TotalDataIngestionCount'])) {
            $model->totalDataIngestionCount = $map['TotalDataIngestionCount'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        if (isset($map['VendorId'])) {
            $model->vendorId = $map['VendorId'];
        }

        if (isset($map['VendorName'])) {
            $model->vendorName = $map['VendorName'];
        }

        return $model;
    }
}
