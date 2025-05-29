<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\QueryTokenUsageResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $apiKey;

    /**
     * @var int
     */
    public $inputToken;

    /**
     * @var int
     */
    public $outputToken;

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
    public $tenantId;

    /**
     * @var string
     */
    public $usageTime;
    protected $_name = [
        'apiKey' => 'apiKey',
        'inputToken' => 'inputToken',
        'outputToken' => 'outputToken',
        'productKey' => 'productKey',
        'productName' => 'productName',
        'tenantId' => 'tenantId',
        'usageTime' => 'usageTime',
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

        if (null !== $this->inputToken) {
            $res['inputToken'] = $this->inputToken;
        }

        if (null !== $this->outputToken) {
            $res['outputToken'] = $this->outputToken;
        }

        if (null !== $this->productKey) {
            $res['productKey'] = $this->productKey;
        }

        if (null !== $this->productName) {
            $res['productName'] = $this->productName;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        if (null !== $this->usageTime) {
            $res['usageTime'] = $this->usageTime;
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

        if (isset($map['inputToken'])) {
            $model->inputToken = $map['inputToken'];
        }

        if (isset($map['outputToken'])) {
            $model->outputToken = $map['outputToken'];
        }

        if (isset($map['productKey'])) {
            $model->productKey = $map['productKey'];
        }

        if (isset($map['productName'])) {
            $model->productName = $map['productName'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        if (isset($map['usageTime'])) {
            $model->usageTime = $map['usageTime'];
        }

        return $model;
    }
}
