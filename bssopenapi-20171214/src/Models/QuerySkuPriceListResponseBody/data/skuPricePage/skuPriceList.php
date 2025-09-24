<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySkuPriceListResponseBody\data\skuPricePage;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QuerySkuPriceListResponseBody\data\skuPricePage\skuPriceList\cskuPriceList;

class skuPriceList extends Model
{
    /**
     * @var cskuPriceList[]
     */
    public $cskuPriceList;

    /**
     * @var string
     */
    public $skuCode;

    /**
     * @var string[]
     */
    public $skuFactorMap;
    protected $_name = [
        'cskuPriceList' => 'CskuPriceList',
        'skuCode' => 'SkuCode',
        'skuFactorMap' => 'SkuFactorMap',
    ];

    public function validate()
    {
        if (\is_array($this->cskuPriceList)) {
            Model::validateArray($this->cskuPriceList);
        }
        if (\is_array($this->skuFactorMap)) {
            Model::validateArray($this->skuFactorMap);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cskuPriceList) {
            if (\is_array($this->cskuPriceList)) {
                $res['CskuPriceList'] = [];
                $n1 = 0;
                foreach ($this->cskuPriceList as $item1) {
                    $res['CskuPriceList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->skuCode) {
            $res['SkuCode'] = $this->skuCode;
        }

        if (null !== $this->skuFactorMap) {
            if (\is_array($this->skuFactorMap)) {
                $res['SkuFactorMap'] = [];
                foreach ($this->skuFactorMap as $key1 => $value1) {
                    $res['SkuFactorMap'][$key1] = $value1;
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
        if (isset($map['CskuPriceList'])) {
            if (!empty($map['CskuPriceList'])) {
                $model->cskuPriceList = [];
                $n1 = 0;
                foreach ($map['CskuPriceList'] as $item1) {
                    $model->cskuPriceList[$n1] = cskuPriceList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SkuCode'])) {
            $model->skuCode = $map['SkuCode'];
        }

        if (isset($map['SkuFactorMap'])) {
            if (!empty($map['SkuFactorMap'])) {
                $model->skuFactorMap = [];
                foreach ($map['SkuFactorMap'] as $key1 => $value1) {
                    $model->skuFactorMap[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
