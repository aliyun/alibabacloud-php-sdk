<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;

class SkuSaleInfoListResult extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var SkuSaleInfo[]
     */
    public $skuSaleInfos;
    protected $_name = [
        'requestId'    => 'requestId',
        'skuSaleInfos' => 'skuSaleInfos',
    ];

    public function validate()
    {
        if (\is_array($this->skuSaleInfos)) {
            Model::validateArray($this->skuSaleInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->skuSaleInfos) {
            if (\is_array($this->skuSaleInfos)) {
                $res['skuSaleInfos'] = [];
                $n1                  = 0;
                foreach ($this->skuSaleInfos as $item1) {
                    $res['skuSaleInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['skuSaleInfos'])) {
            if (!empty($map['skuSaleInfos'])) {
                $model->skuSaleInfos = [];
                $n1                  = 0;
                foreach ($map['skuSaleInfos'] as $item1) {
                    $model->skuSaleInfos[$n1++] = SkuSaleInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
