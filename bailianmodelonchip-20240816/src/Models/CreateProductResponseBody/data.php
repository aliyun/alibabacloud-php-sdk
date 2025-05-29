<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\CreateProductResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var string
     */
    public $description;

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
     * @var string
     */
    public $userId;
    protected $_name = [
        'apiKey' => 'apiKey',
        'description' => 'description',
        'productKey' => 'productKey',
        'productName' => 'productName',
        'productSecret' => 'productSecret',
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
        if (null !== $this->apiKey) {
            $res['apiKey'] = $this->apiKey;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
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
        if (isset($map['apiKey'])) {
            $model->apiKey = $map['apiKey'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
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

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
