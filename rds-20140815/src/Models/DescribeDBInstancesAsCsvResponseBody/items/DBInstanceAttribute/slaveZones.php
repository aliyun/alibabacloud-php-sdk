<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesAsCsvResponseBody\items\DBInstanceAttribute;

use AlibabaCloud\Tea\Model;

class slaveZones extends Model
{
    /**
     * @var string[]
     */
    public $slaveRegion;
    protected $_name = [
        'slaveRegion' => 'slaveRegion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->slaveRegion) {
            $res['slaveRegion'] = $this->slaveRegion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return slaveZones
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['slaveRegion'])) {
            if (!empty($map['slaveRegion'])) {
                $model->slaveRegion = $map['slaveRegion'];
            }
        }

        return $model;
    }
}
