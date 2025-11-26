<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsCommodityCodeResponseBody\commodityCodeInfo;

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
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->commodityCodeInfo)) {
            Model::validateArray($this->commodityCodeInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commodityCodeInfo) {
            if (\is_array($this->commodityCodeInfo)) {
                $res['CommodityCodeInfo'] = [];
                $n1 = 0;
                foreach ($this->commodityCodeInfo as $item1) {
                    $res['CommodityCodeInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CommodityCodeInfo'])) {
            if (!empty($map['CommodityCodeInfo'])) {
                $model->commodityCodeInfo = [];
                $n1 = 0;
                foreach ($map['CommodityCodeInfo'] as $item1) {
                    $model->commodityCodeInfo[$n1] = commodityCodeInfo::fromMap($item1);
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
