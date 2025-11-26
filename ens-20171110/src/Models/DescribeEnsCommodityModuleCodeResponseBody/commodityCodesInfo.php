<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsCommodityModuleCodeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsCommodityModuleCodeResponseBody\commodityCodesInfo\moduleCodesInfo;

class commodityCodesInfo extends Model
{
    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var moduleCodesInfo[]
     */
    public $moduleCodesInfo;
    protected $_name = [
        'commodityCode' => 'CommodityCode',
        'moduleCodesInfo' => 'ModuleCodesInfo',
    ];

    public function validate()
    {
        if (\is_array($this->moduleCodesInfo)) {
            Model::validateArray($this->moduleCodesInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }

        if (null !== $this->moduleCodesInfo) {
            if (\is_array($this->moduleCodesInfo)) {
                $res['ModuleCodesInfo'] = [];
                $n1 = 0;
                foreach ($this->moduleCodesInfo as $item1) {
                    $res['ModuleCodesInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }

        if (isset($map['ModuleCodesInfo'])) {
            if (!empty($map['ModuleCodesInfo'])) {
                $model->moduleCodesInfo = [];
                $n1 = 0;
                foreach ($map['ModuleCodesInfo'] as $item1) {
                    $model->moduleCodesInfo[$n1] = moduleCodesInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
