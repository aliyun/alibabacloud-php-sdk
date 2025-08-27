<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeDBInstancesOverviewResponseBody\DBInstances;

class DescribeDBInstancesOverviewResponseBody extends Model
{
    /**
     * @var DBInstances[]
     */
    public $DBInstances;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'DBInstances' => 'DBInstances',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->DBInstances)) {
            Model::validateArray($this->DBInstances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstances) {
            if (\is_array($this->DBInstances)) {
                $res['DBInstances'] = [];
                $n1 = 0;
                foreach ($this->DBInstances as $item1) {
                    $res['DBInstances'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['DBInstances'])) {
            if (!empty($map['DBInstances'])) {
                $model->DBInstances = [];
                $n1 = 0;
                foreach ($map['DBInstances'] as $item1) {
                    $model->DBInstances[$n1] = DBInstances::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
