<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsCommodityModuleCodeResponseBody\commodityCodesInfo;
use AlibabaCloud\Tea\Model;

class DescribeEnsCommodityModuleCodeResponseBody extends Model
{
    /**
     * @var commodityCodesInfo[]
     */
    public $commodityCodesInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'commodityCodesInfo' => 'CommodityCodesInfo',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commodityCodesInfo) {
            $res['CommodityCodesInfo'] = [];
            if (null !== $this->commodityCodesInfo && \is_array($this->commodityCodesInfo)) {
                $n = 0;
                foreach ($this->commodityCodesInfo as $item) {
                    $res['CommodityCodesInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeEnsCommodityModuleCodeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommodityCodesInfo'])) {
            if (!empty($map['CommodityCodesInfo'])) {
                $model->commodityCodesInfo = [];
                $n                         = 0;
                foreach ($map['CommodityCodesInfo'] as $item) {
                    $model->commodityCodesInfo[$n++] = null !== $item ? commodityCodesInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
