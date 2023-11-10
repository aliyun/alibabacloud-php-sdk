<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeQuickSaleConfigRequest extends Model
{
    /**
     * @description The product code. Valid values:
     *
     *   rds: The instance is a subscription instance.
     *   bards: The instance is a pay-as-you-go instance.
     *
     * @example rds
     *
     * @var string
     */
    public $commodity;

    /**
     * @description The database engine of the instance. Valid values:
     *
     *   **MySQL**
     *   **SQLServer**
     *   **PostgreSQL**
     *   **MariaDB**
     *
     * @example MySQL
     *
     * @var string
     */
    public $engine;

    /**
     * @description The region ID. You can call the [DescribeRegions](~~26243~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'commodity' => 'Commodity',
        'engine'    => 'Engine',
        'regionId'  => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commodity) {
            $res['Commodity'] = $this->commodity;
        }
        if (null !== $this->engine) {
            $res['Engine'] = $this->engine;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeQuickSaleConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Commodity'])) {
            $model->commodity = $map['Commodity'];
        }
        if (isset($map['Engine'])) {
            $model->engine = $map['Engine'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
