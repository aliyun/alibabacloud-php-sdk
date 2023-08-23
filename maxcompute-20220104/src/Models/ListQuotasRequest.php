<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Tea\Model;

class ListQuotasRequest extends Model
{
    /**
     * @example subscription
     *
     * @var string
     */
    public $billingType;

    /**
     * @example cHlvZHBzX3VkZl8xMDExNV8xNDU3NDI4NDkzKg==
     *
     * @var string
     */
    public $marker;

    /**
     * @example 100
     *
     * @var int
     */
    public $maxItem;

    /**
     * @example ODPS
     *
     * @var string
     */
    public $productId;

    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $saleTags;

    /**
     * @example 280747109771520
     *
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'billingType' => 'billingType',
        'marker'      => 'marker',
        'maxItem'     => 'maxItem',
        'productId'   => 'productId',
        'region'      => 'region',
        'saleTags'    => 'saleTags',
        'tenantId'    => 'tenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->billingType) {
            $res['billingType'] = $this->billingType;
        }
        if (null !== $this->marker) {
            $res['marker'] = $this->marker;
        }
        if (null !== $this->maxItem) {
            $res['maxItem'] = $this->maxItem;
        }
        if (null !== $this->productId) {
            $res['productId'] = $this->productId;
        }
        if (null !== $this->region) {
            $res['region'] = $this->region;
        }
        if (null !== $this->saleTags) {
            $res['saleTags'] = $this->saleTags;
        }
        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListQuotasRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['billingType'])) {
            $model->billingType = $map['billingType'];
        }
        if (isset($map['marker'])) {
            $model->marker = $map['marker'];
        }
        if (isset($map['maxItem'])) {
            $model->maxItem = $map['maxItem'];
        }
        if (isset($map['productId'])) {
            $model->productId = $map['productId'];
        }
        if (isset($map['region'])) {
            $model->region = $map['region'];
        }
        if (isset($map['saleTags'])) {
            $model->saleTags = $map['saleTags'];
        }
        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
