<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapioxscross\V20200701\Models;

use AlibabaCloud\SDK\Viapioxscross\V20200701\Models\LingJieOpenStatus\commoditiesOpenStatus;
use AlibabaCloud\Tea\Model;

class LingJieOpenStatus extends Model
{
    /**
     * @var commoditiesOpenStatus[]
     */
    public $commoditiesOpenStatus;

    /**
     * @var string
     */
    public $openTime;

    /**
     * @var string
     */
    public $productConsoleUrl;

    /**
     * @var bool
     */
    public $productEnabled;

    /**
     * @var string
     */
    public $productMonitorUrl;

    /**
     * @var string
     */
    public $productWikiUrl;
    protected $_name = [
        'commoditiesOpenStatus' => 'CommoditiesOpenStatus',
        'openTime'              => 'OpenTime',
        'productConsoleUrl'     => 'ProductConsoleUrl',
        'productEnabled'        => 'ProductEnabled',
        'productMonitorUrl'     => 'ProductMonitorUrl',
        'productWikiUrl'        => 'ProductWikiUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commoditiesOpenStatus) {
            $res['CommoditiesOpenStatus'] = [];
            if (null !== $this->commoditiesOpenStatus && \is_array($this->commoditiesOpenStatus)) {
                $n = 0;
                foreach ($this->commoditiesOpenStatus as $item) {
                    $res['CommoditiesOpenStatus'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->openTime) {
            $res['OpenTime'] = $this->openTime;
        }
        if (null !== $this->productConsoleUrl) {
            $res['ProductConsoleUrl'] = $this->productConsoleUrl;
        }
        if (null !== $this->productEnabled) {
            $res['ProductEnabled'] = $this->productEnabled;
        }
        if (null !== $this->productMonitorUrl) {
            $res['ProductMonitorUrl'] = $this->productMonitorUrl;
        }
        if (null !== $this->productWikiUrl) {
            $res['ProductWikiUrl'] = $this->productWikiUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LingJieOpenStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommoditiesOpenStatus'])) {
            if (!empty($map['CommoditiesOpenStatus'])) {
                $model->commoditiesOpenStatus = [];
                $n                            = 0;
                foreach ($map['CommoditiesOpenStatus'] as $item) {
                    $model->commoditiesOpenStatus[$n++] = null !== $item ? commoditiesOpenStatus::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OpenTime'])) {
            $model->openTime = $map['OpenTime'];
        }
        if (isset($map['ProductConsoleUrl'])) {
            $model->productConsoleUrl = $map['ProductConsoleUrl'];
        }
        if (isset($map['ProductEnabled'])) {
            $model->productEnabled = $map['ProductEnabled'];
        }
        if (isset($map['ProductMonitorUrl'])) {
            $model->productMonitorUrl = $map['ProductMonitorUrl'];
        }
        if (isset($map['ProductWikiUrl'])) {
            $model->productWikiUrl = $map['ProductWikiUrl'];
        }

        return $model;
    }
}
