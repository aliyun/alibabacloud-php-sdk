<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\CheckResourceStockResponseBody;

use AlibabaCloud\Tea\Model;

class resourceStockModels extends Model
{
    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @example Available
     *
     * @var string
     */
    public $stockStatus;

    /**
     * @example cn-shanghai-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'regionId'    => 'RegionId',
        'stockStatus' => 'StockStatus',
        'zoneId'      => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->stockStatus) {
            $res['StockStatus'] = $this->stockStatus;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceStockModels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StockStatus'])) {
            $model->stockStatus = $map['StockStatus'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
