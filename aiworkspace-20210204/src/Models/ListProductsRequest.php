<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;

class ListProductsRequest extends Model
{
    /**
     * @var string
     */
    public $productCodes;

    /**
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
        'verbose' => 'Verbose',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
