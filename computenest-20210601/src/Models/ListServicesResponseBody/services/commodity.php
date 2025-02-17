<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\ListServicesResponseBody\services;

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
    public $deployPage;
    protected $_name = [
        'commodityCode' => 'CommodityCode',
        'deployPage'    => 'DeployPage',
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

        if (null !== $this->deployPage) {
            $res['DeployPage'] = $this->deployPage;
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

        if (isset($map['DeployPage'])) {
            $model->deployPage = $map['DeployPage'];
        }

        return $model;
    }
}
