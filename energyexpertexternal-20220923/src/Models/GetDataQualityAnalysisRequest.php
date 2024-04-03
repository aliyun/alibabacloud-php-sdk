<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\Tea\Model;

class GetDataQualityAnalysisRequest extends Model
{
    /**
     * @description The enterprise code.
     *
     * @example C-20080808-1
     *
     * @var string
     */
    public $code;

    /**
     * @description Data quality assessment type: 1 is DQI and 2 is DQR.
     *
     * @example 1
     *
     * @var int
     */
    public $dataQualityEvaluationType;

    /**
     * @description The product id.
     *
     * @example 1024
     *
     * @var int
     */
    public $productId;

    /**
     * @description Product type: 1 indicates that the carbon footprint of the product is requested, and 5 indicates that the carbon footprint of the supply chain is requested.
     *
     * @example 1
     *
     * @var int
     */
    public $productType;
    protected $_name = [
        'code'                      => 'code',
        'dataQualityEvaluationType' => 'dataQualityEvaluationType',
        'productId'                 => 'productId',
        'productType'               => 'productType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->dataQualityEvaluationType) {
            $res['dataQualityEvaluationType'] = $this->dataQualityEvaluationType;
        }
        if (null !== $this->productId) {
            $res['productId'] = $this->productId;
        }
        if (null !== $this->productType) {
            $res['productType'] = $this->productType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetDataQualityAnalysisRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['dataQualityEvaluationType'])) {
            $model->dataQualityEvaluationType = $map['dataQualityEvaluationType'];
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
