<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeGadInstanceDbMembersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeGadInstanceDbMembersResponseBody\slaveDbInstances\slaveDbInstances;

class slaveDbInstances extends Model
{
    /**
     * @var slaveDbInstances[]
     */
    public $slaveDbInstances;
    protected $_name = [
        'slaveDbInstances' => 'SlaveDbInstances',
    ];

    public function validate()
    {
        if (\is_array($this->slaveDbInstances)) {
            Model::validateArray($this->slaveDbInstances);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->slaveDbInstances) {
            if (\is_array($this->slaveDbInstances)) {
                $res['SlaveDbInstances'] = [];
                $n1 = 0;
                foreach ($this->slaveDbInstances as $item1) {
                    $res['SlaveDbInstances'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SlaveDbInstances'])) {
            if (!empty($map['SlaveDbInstances'])) {
                $model->slaveDbInstances = [];
                $n1 = 0;
                foreach ($map['SlaveDbInstances'] as $item1) {
                    $model->slaveDbInstances[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
