<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Tea\Model;

class ListProductsRequest extends Model
{
    /**
     * @example PAI_isolate
     *
     * @var string
     */
    public $productCodes;

    /**
     * @example oss
     *
     * @var string
     */
    public $serviceCodes;

    /**
     * @var bool
     */
    public $verbose;
    protected $_name = [
        'productCodes' => 'ProductCodes',
        'serviceCodes' => 'ServiceCodes',
        'verbose'      => 'Verbose',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productCodes) {
            $res['ProductCodes'] = $this->productCodes;
        }
        if (null !== $this->serviceCodes) {
            $res['ServiceCodes'] = $this->serviceCodes;
        }
        if (null !== $this->verbose) {
            $res['Verbose'] = $this->verbose;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListProductsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductCodes'])) {
            $model->productCodes = $map['ProductCodes'];
        }
        if (isset($map['ServiceCodes'])) {
            $model->serviceCodes = $map['ServiceCodes'];
        }
        if (isset($map['Verbose'])) {
            $model->verbose = $map['Verbose'];
        }

        return $model;
    }
}
