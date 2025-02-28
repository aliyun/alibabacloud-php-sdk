<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesByPerformanceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesByPerformanceResponseBody\items\DBInstancePerformance;

class items extends Model
{
    /**
     * @var DBInstancePerformance[]
     */
    public $DBInstancePerformance;
    protected $_name = [
        'DBInstancePerformance' => 'DBInstancePerformance',
    ];

    public function validate()
    {
        if (\is_array($this->DBInstancePerformance)) {
            Model::validateArray($this->DBInstancePerformance);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstancePerformance) {
            if (\is_array($this->DBInstancePerformance)) {
                $res['DBInstancePerformance'] = [];
                $n1                           = 0;
                foreach ($this->DBInstancePerformance as $item1) {
                    $res['DBInstancePerformance'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DBInstancePerformance'])) {
            if (!empty($map['DBInstancePerformance'])) {
                $model->DBInstancePerformance = [];
                $n1                           = 0;
                foreach ($map['DBInstancePerformance'] as $item1) {
                    $model->DBInstancePerformance[$n1++] = DBInstancePerformance::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
