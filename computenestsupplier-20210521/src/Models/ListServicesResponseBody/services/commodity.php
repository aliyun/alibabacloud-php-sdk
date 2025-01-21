<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\ListServicesResponseBody\services;

use AlibabaCloud\Dara\Model;

class commodity extends Model
{
    /**
     * @var string
     */
    public $commodityCode;
    /**
     * @var string
     */
    public $saasBoostMetadata;
    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'commodityCode'     => 'CommodityCode',
        'saasBoostMetadata' => 'SaasBoostMetadata',
        'type'              => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }

        if (null !== $this->saasBoostMetadata) {
            $res['SaasBoostMetadata'] = $this->saasBoostMetadata;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }

        if (isset($map['SaasBoostMetadata'])) {
            $model->saasBoostMetadata = $map['SaasBoostMetadata'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
