<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsCommodityCodeResponseBody\commodityCodeInfo;
use AlibabaCloud\Tea\Model;

class DescribeEnsCommodityCodeResponseBody extends Model
{
    /**
     * @var commodityCodeInfo[]
     */
    public $commodityCodeInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'commodityCodeInfo' => 'CommodityCodeInfo',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commodityCodeInfo) {
            $res['CommodityCodeInfo'] = [];
            if (null !== $this->commodityCodeInfo && \is_array($this->commodityCodeInfo)) {
                $n = 0;
                foreach ($this->commodityCodeInfo as $item) {
                    $res['CommodityCodeInfo'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeEnsCommodityCodeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommodityCodeInfo'])) {
            if (!empty($map['CommodityCodeInfo'])) {
                $model->commodityCodeInfo = [];
                $n                        = 0;
                foreach ($map['CommodityCodeInfo'] as $item) {
                    $model->commodityCodeInfo[$n++] = null !== $item ? commodityCodeInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
