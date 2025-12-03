<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models\DescribeZonesResponseBody\zones\zone;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Slb\V20140515\Models\DescribeZonesResponseBody\zones\zone\slaveZones\slaveZone;

class slaveZones extends Model
{
    /**
     * @var slaveZone[]
     */
    public $slaveZone;
    protected $_name = [
        'slaveZone' => 'SlaveZone',
    ];

    public function validate()
    {
        if (\is_array($this->slaveZone)) {
            Model::validateArray($this->slaveZone);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->slaveZone) {
            if (\is_array($this->slaveZone)) {
                $res['SlaveZone'] = [];
                $n1 = 0;
                foreach ($this->slaveZone as $item1) {
                    $res['SlaveZone'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SlaveZone'])) {
            if (!empty($map['SlaveZone'])) {
                $model->slaveZone = [];
                $n1 = 0;
                foreach ($map['SlaveZone'] as $item1) {
                    $model->slaveZone[$n1] = slaveZone::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
