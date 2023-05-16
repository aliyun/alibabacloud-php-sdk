<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsCommodityModuleCodeResponseBody;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsCommodityModuleCodeResponseBody\commodityCodesInfo\moduleCodesInfo;
use AlibabaCloud\Tea\Model;

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
        'commodityCode'   => 'CommodityCode',
        'moduleCodesInfo' => 'ModuleCodesInfo',
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
        if (null !== $this->moduleCodesInfo) {
            $res['ModuleCodesInfo'] = [];
            if (null !== $this->moduleCodesInfo && \is_array($this->moduleCodesInfo)) {
                $n = 0;
                foreach ($this->moduleCodesInfo as $item) {
                    $res['ModuleCodesInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return commodityCodesInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['ModuleCodesInfo'])) {
            if (!empty($map['ModuleCodesInfo'])) {
                $model->moduleCodesInfo = [];
                $n                      = 0;
                foreach ($map['ModuleCodesInfo'] as $item) {
                    $model->moduleCodesInfo[$n++] = null !== $item ? moduleCodesInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
