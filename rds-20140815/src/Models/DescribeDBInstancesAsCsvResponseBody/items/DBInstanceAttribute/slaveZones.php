<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstancesAsCsvResponseBody\items\DBInstanceAttribute;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->slaveRegion)) {
            Model::validateArray($this->slaveRegion);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->slaveRegion) {
            if (\is_array($this->slaveRegion)) {
                $res['slaveRegion'] = [];
                $n1 = 0;
                foreach ($this->slaveRegion as $item1) {
                    $res['slaveRegion'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['slaveRegion'])) {
            if (!empty($map['slaveRegion'])) {
                $model->slaveRegion = [];
                $n1 = 0;
                foreach ($map['slaveRegion'] as $item1) {
                    $model->slaveRegion[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
