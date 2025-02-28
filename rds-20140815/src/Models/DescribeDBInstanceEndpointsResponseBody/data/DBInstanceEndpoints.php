<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceEndpointsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceEndpointsResponseBody\data\DBInstanceEndpoints\DBInstanceEndpoint;

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
        if (\is_array($this->DBInstanceEndpoint)) {
            Model::validateArray($this->DBInstanceEndpoint);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceEndpoint) {
            if (\is_array($this->DBInstanceEndpoint)) {
                $res['DBInstanceEndpoint'] = [];
                $n1                        = 0;
                foreach ($this->DBInstanceEndpoint as $item1) {
                    $res['DBInstanceEndpoint'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DBInstanceEndpoint'])) {
            if (!empty($map['DBInstanceEndpoint'])) {
                $model->DBInstanceEndpoint = [];
                $n1                        = 0;
                foreach ($map['DBInstanceEndpoint'] as $item1) {
                    $model->DBInstanceEndpoint[$n1++] = DBInstanceEndpoint::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
