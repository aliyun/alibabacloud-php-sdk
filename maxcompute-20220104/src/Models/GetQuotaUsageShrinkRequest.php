<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Dara\Model;

class GetQuotaUsageShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $aggMethod;
    /**
     * @var int
     */
    public $from;
    /**
     * @var string
     */
    public $plotTypesShrink;
    /**
     * @var string
     */
    public $productId;
    /**
     * @var string
     */
    public $region;
    /**
     * @var string
     */
    public $subQuotaNickname;
    /**
     * @var string
     */
    public $tenantId;
    /**
     * @var int
     */
    public $to;
    /**
     * @var string
     */
    public $yAxisTypesShrink;
    protected $_name = [
        'aggMethod'        => 'aggMethod',
        'from'             => 'from',
        'plotTypesShrink'  => 'plotTypes',
        'productId'        => 'productId',
        'region'           => 'region',
        'subQuotaNickname' => 'subQuotaNickname',
        'tenantId'         => 'tenantId',
        'to'               => 'to',
        'yAxisTypesShrink' => 'yAxisTypes',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aggMethod) {
            $res['aggMethod'] = $this->aggMethod;
        }

        if (null !== $this->from) {
            $res['from'] = $this->from;
        }

        if (null !== $this->plotTypesShrink) {
            $res['plotTypes'] = $this->plotTypesShrink;
        }

        if (null !== $this->productId) {
            $res['productId'] = $this->productId;
        }

        if (null !== $this->region) {
            $res['region'] = $this->region;
        }

        if (null !== $this->subQuotaNickname) {
            $res['subQuotaNickname'] = $this->subQuotaNickname;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        if (null !== $this->to) {
            $res['to'] = $this->to;
        }

        if (null !== $this->yAxisTypesShrink) {
            $res['yAxisTypes'] = $this->yAxisTypesShrink;
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
        if (isset($map['aggMethod'])) {
            $model->aggMethod = $map['aggMethod'];
        }

        if (isset($map['from'])) {
            $model->from = $map['from'];
        }

        if (isset($map['plotTypes'])) {
            $model->plotTypesShrink = $map['plotTypes'];
        }

        if (isset($map['productId'])) {
            $model->productId = $map['productId'];
        }

        if (isset($map['region'])) {
            $model->region = $map['region'];
        }

        if (isset($map['subQuotaNickname'])) {
            $model->subQuotaNickname = $map['subQuotaNickname'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        if (isset($map['to'])) {
            $model->to = $map['to'];
        }

        if (isset($map['yAxisTypes'])) {
            $model->yAxisTypesShrink = $map['yAxisTypes'];
        }

        return $model;
    }
}
