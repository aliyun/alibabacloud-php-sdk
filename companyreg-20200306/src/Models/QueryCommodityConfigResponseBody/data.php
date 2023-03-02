<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Companyreg\V20200306\Models\QueryCommodityConfigResponseBody;

use AlibabaCloud\SDK\Companyreg\V20200306\Models\QueryCommodityConfigResponseBody\data\commodityModules;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example companyreg_icpbutler_public_cn
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @var commodityModules[]
     */
    public $commodityModules;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $iconUrl;

    /**
     * @example companyreg
     *
     * @var string
     */
    public $productLine;

    /**
     * @var string
     */
    public $protocolUrl;

    /**
     * @example 0
     *
     * @var string
     */
    public $startingPrice;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'commodityCode'    => 'CommodityCode',
        'commodityModules' => 'CommodityModules',
        'description'      => 'Description',
        'iconUrl'          => 'IconUrl',
        'productLine'      => 'ProductLine',
        'protocolUrl'      => 'ProtocolUrl',
        'startingPrice'    => 'StartingPrice',
        'type'             => 'Type',
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
        if (null !== $this->commodityModules) {
            $res['CommodityModules'] = [];
            if (null !== $this->commodityModules && \is_array($this->commodityModules)) {
                $n = 0;
                foreach ($this->commodityModules as $item) {
                    $res['CommodityModules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->iconUrl) {
            $res['IconUrl'] = $this->iconUrl;
        }
        if (null !== $this->productLine) {
            $res['ProductLine'] = $this->productLine;
        }
        if (null !== $this->protocolUrl) {
            $res['ProtocolUrl'] = $this->protocolUrl;
        }
        if (null !== $this->startingPrice) {
            $res['StartingPrice'] = $this->startingPrice;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['CommodityModules'])) {
            if (!empty($map['CommodityModules'])) {
                $model->commodityModules = [];
                $n                       = 0;
                foreach ($map['CommodityModules'] as $item) {
                    $model->commodityModules[$n++] = null !== $item ? commodityModules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['IconUrl'])) {
            $model->iconUrl = $map['IconUrl'];
        }
        if (isset($map['ProductLine'])) {
            $model->productLine = $map['ProductLine'];
        }
        if (isset($map['ProtocolUrl'])) {
            $model->protocolUrl = $map['ProtocolUrl'];
        }
        if (isset($map['StartingPrice'])) {
            $model->startingPrice = $map['StartingPrice'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
