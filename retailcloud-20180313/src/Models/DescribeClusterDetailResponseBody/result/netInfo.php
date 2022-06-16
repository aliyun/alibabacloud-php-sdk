<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailcloud\V20180313\Models\DescribeClusterDetailResponseBody\result;

use AlibabaCloud\Tea\Model;

class netInfo extends Model
{
    /**
     * @var string
     */
    public $netPlugType;

    /**
     * @var string
     */
    public $prodCIDR;

    /**
     * @var string
     */
    public $serviceCIDR;
    protected $_name = [
        'netPlugType' => 'NetPlugType',
        'prodCIDR'    => 'ProdCIDR',
        'serviceCIDR' => 'ServiceCIDR',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->netPlugType) {
            $res['NetPlugType'] = $this->netPlugType;
        }
        if (null !== $this->prodCIDR) {
            $res['ProdCIDR'] = $this->prodCIDR;
        }
        if (null !== $this->serviceCIDR) {
            $res['ServiceCIDR'] = $this->serviceCIDR;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return netInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetPlugType'])) {
            $model->netPlugType = $map['NetPlugType'];
        }
        if (isset($map['ProdCIDR'])) {
            $model->prodCIDR = $map['ProdCIDR'];
        }
        if (isset($map['ServiceCIDR'])) {
            $model->serviceCIDR = $map['ServiceCIDR'];
        }

        return $model;
    }
}
