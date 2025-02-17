<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceModificationPriceResponseBody\priceInfo\price;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstanceModificationPriceResponseBody\priceInfo\price\detailInfos\detailInfo;

class detailInfos extends Model
{
    /**
     * @var detailInfo[]
     */
    public $detailInfo;
    protected $_name = [
        'detailInfo' => 'DetailInfo',
    ];

    public function validate()
    {
        if (\is_array($this->detailInfo)) {
            Model::validateArray($this->detailInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detailInfo) {
            if (\is_array($this->detailInfo)) {
                $res['DetailInfo'] = [];
                $n1                = 0;
                foreach ($this->detailInfo as $item1) {
                    $res['DetailInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DetailInfo'])) {
            if (!empty($map['DetailInfo'])) {
                $model->detailInfo = [];
                $n1                = 0;
                foreach ($map['DetailInfo'] as $item1) {
                    $model->detailInfo[$n1++] = detailInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
