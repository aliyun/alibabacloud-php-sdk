<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class SkuSaleInfoListResult extends Model
{
    /**
     * @example 3239281273464326823
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->skuSaleInfos) {
            $res['skuSaleInfos'] = [];
            if (null !== $this->skuSaleInfos && \is_array($this->skuSaleInfos)) {
                $n = 0;
                foreach ($this->skuSaleInfos as $item) {
                    $res['skuSaleInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SkuSaleInfoListResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['skuSaleInfos'])) {
            if (!empty($map['skuSaleInfos'])) {
                $model->skuSaleInfos = [];
                $n                   = 0;
                foreach ($map['skuSaleInfos'] as $item) {
                    $model->skuSaleInfos[$n++] = null !== $item ? SkuSaleInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
