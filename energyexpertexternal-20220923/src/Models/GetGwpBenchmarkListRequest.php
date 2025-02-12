<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\Dara\Model;

class GetGwpBenchmarkListRequest extends Model
{
    /**
     * @var string
     */
    public $code;
    /**
     * @var int
     */
    public $productId;
    /**
     * @var int
     */
    public $productType;
    protected $_name = [
        'code'        => 'code',
        'productId'   => 'productId',
        'productType' => 'productType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->productId) {
            $res['productId'] = $this->productId;
        }

        if (null !== $this->productType) {
            $res['productType'] = $this->productType;
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
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['productId'])) {
            $model->productId = $map['productId'];
        }

        if (isset($map['productType'])) {
            $model->productType = $map['productType'];
        }

        return $model;
    }
}
