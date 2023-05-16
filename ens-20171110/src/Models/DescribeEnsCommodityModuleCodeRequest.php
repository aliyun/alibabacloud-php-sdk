<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DescribeEnsCommodityModuleCodeRequest extends Model
{
    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $moduleCode;
    protected $_name = [
        'commodityCode' => 'CommodityCode',
        'moduleCode'    => 'ModuleCode',
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
        if (null !== $this->moduleCode) {
            $res['ModuleCode'] = $this->moduleCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEnsCommodityModuleCodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['ModuleCode'])) {
            $model->moduleCode = $map['ModuleCode'];
        }

        return $model;
    }
}
