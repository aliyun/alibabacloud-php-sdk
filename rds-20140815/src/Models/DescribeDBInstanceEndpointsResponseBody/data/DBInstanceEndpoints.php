<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceEndpointsResponseBody\data;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceEndpointsResponseBody\data\DBInstanceEndpoints\DBInstanceEndpoint;
use AlibabaCloud\Tea\Model;

class DBInstanceEndpoints extends Model
{
    /**
     * @var DBInstanceEndpoint[]
     */
    public $DBInstanceEndpoint;
    protected $_name = [
        'DBInstanceEndpoint' => 'DBInstanceEndpoint',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceEndpoint) {
            $res['DBInstanceEndpoint'] = [];
            if (null !== $this->DBInstanceEndpoint && \is_array($this->DBInstanceEndpoint)) {
                $n = 0;
                foreach ($this->DBInstanceEndpoint as $item) {
                    $res['DBInstanceEndpoint'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DBInstanceEndpoints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceEndpoint'])) {
            if (!empty($map['DBInstanceEndpoint'])) {
                $model->DBInstanceEndpoint = [];
                $n                         = 0;
                foreach ($map['DBInstanceEndpoint'] as $item) {
                    $model->DBInstanceEndpoint[$n++] = null !== $item ? DBInstanceEndpoint::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
