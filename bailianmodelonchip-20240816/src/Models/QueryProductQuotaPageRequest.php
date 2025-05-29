<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models;

use AlibabaCloud\Dara\Model;

class QueryProductQuotaPageRequest extends Model
{
    /**
     * @var int
     */
    public $pageIndex;

    /**
     * @var int
     */
    public $pageSize;

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
    public $purchaseTimeEnd;

    /**
     * @var string
     */
    public $purchaseTimeStart;

    /**
     * @var int
     */
    public $purchaseType;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'pageIndex' => 'pageIndex',
        'pageSize' => 'pageSize',
        'productKey' => 'productKey',
        'productName' => 'productName',
        'purchaseTimeEnd' => 'purchaseTimeEnd',
        'purchaseTimeStart' => 'purchaseTimeStart',
        'purchaseType' => 'purchaseType',
        'tenantId' => 'tenantId',
        'userId' => 'userId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pageIndex) {
            $res['pageIndex'] = $this->pageIndex;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->productKey) {
            $res['productKey'] = $this->productKey;
        }

        if (null !== $this->productName) {
            $res['productName'] = $this->productName;
        }

        if (null !== $this->purchaseTimeEnd) {
            $res['purchaseTimeEnd'] = $this->purchaseTimeEnd;
        }

        if (null !== $this->purchaseTimeStart) {
            $res['purchaseTimeStart'] = $this->purchaseTimeStart;
        }

        if (null !== $this->purchaseType) {
            $res['purchaseType'] = $this->purchaseType;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
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
        if (isset($map['pageIndex'])) {
            $model->pageIndex = $map['pageIndex'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['productKey'])) {
            $model->productKey = $map['productKey'];
        }

        if (isset($map['productName'])) {
            $model->productName = $map['productName'];
        }

        if (isset($map['purchaseTimeEnd'])) {
            $model->purchaseTimeEnd = $map['purchaseTimeEnd'];
        }

        if (isset($map['purchaseTimeStart'])) {
            $model->purchaseTimeStart = $map['purchaseTimeStart'];
        }

        if (isset($map['purchaseType'])) {
            $model->purchaseType = $map['purchaseType'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
