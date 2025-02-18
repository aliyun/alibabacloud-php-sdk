<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models;

use AlibabaCloud\Dara\Model;

class GetQuotaUsageRequest extends Model
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
     * @var string[]
     */
    public $plotTypes;
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
     * @var string[]
     */
    public $yAxisTypes;
    protected $_name = [
        'aggMethod'        => 'aggMethod',
        'from'             => 'from',
        'plotTypes'        => 'plotTypes',
        'productId'        => 'productId',
        'region'           => 'region',
        'subQuotaNickname' => 'subQuotaNickname',
        'tenantId'         => 'tenantId',
        'to'               => 'to',
        'yAxisTypes'       => 'yAxisTypes',
    ];

    public function validate()
    {
        if (\is_array($this->plotTypes)) {
            Model::validateArray($this->plotTypes);
        }
        if (\is_array($this->yAxisTypes)) {
            Model::validateArray($this->yAxisTypes);
        }
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

        if (null !== $this->plotTypes) {
            if (\is_array($this->plotTypes)) {
                $res['plotTypes'] = [];
                $n1               = 0;
                foreach ($this->plotTypes as $item1) {
                    $res['plotTypes'][$n1++] = $item1;
                }
            }
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

        if (null !== $this->yAxisTypes) {
            if (\is_array($this->yAxisTypes)) {
                $res['yAxisTypes'] = [];
                $n1                = 0;
                foreach ($this->yAxisTypes as $item1) {
                    $res['yAxisTypes'][$n1++] = $item1;
                }
            }
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
            if (!empty($map['plotTypes'])) {
                $model->plotTypes = [];
                $n1               = 0;
                foreach ($map['plotTypes'] as $item1) {
                    $model->plotTypes[$n1++] = $item1;
                }
            }
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
            if (!empty($map['yAxisTypes'])) {
                $model->yAxisTypes = [];
                $n1                = 0;
                foreach ($map['yAxisTypes'] as $item1) {
                    $model->yAxisTypes[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
