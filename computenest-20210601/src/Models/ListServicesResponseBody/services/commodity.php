<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServicesResponseBody\services;

use AlibabaCloud\Tea\Model;

class commodity extends Model
{
    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $deployPage;
    protected $_name = [
        'commodityCode' => 'CommodityCode',
        'deployPage'    => 'DeployPage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->deployPage) {
            $res['DeployPage'] = $this->deployPage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return commodity
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['DeployPage'])) {
            $model->deployPage = $map['DeployPage'];
        }

        return $model;
    }
}
