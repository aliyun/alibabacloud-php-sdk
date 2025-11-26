<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsCommodityModuleCodeResponseBody\commodityCodesInfo;

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
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->commodityCodesInfo)) {
            Model::validateArray($this->commodityCodesInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commodityCodesInfo) {
            if (\is_array($this->commodityCodesInfo)) {
                $res['CommodityCodesInfo'] = [];
                $n1 = 0;
                foreach ($this->commodityCodesInfo as $item1) {
                    $res['CommodityCodesInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['CommodityCodesInfo'])) {
            if (!empty($map['CommodityCodesInfo'])) {
                $model->commodityCodesInfo = [];
                $n1 = 0;
                foreach ($map['CommodityCodesInfo'] as $item1) {
                    $model->commodityCodesInfo[$n1] = commodityCodesInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
