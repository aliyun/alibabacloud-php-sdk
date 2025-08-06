<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesFullStatusResponseBody\instanceFullStatusSet\instanceFullStatusType\scheduledSystemEventSet\scheduledSystemEventType\extendedAttribute;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeInstancesFullStatusResponseBody\instanceFullStatusSet\instanceFullStatusType\scheduledSystemEventSet\scheduledSystemEventType\extendedAttribute\inactiveDisks\inactiveDisk;

class inactiveDisks extends Model
{
    /**
     * @var inactiveDisk[]
     */
    public $inactiveDisk;
    protected $_name = [
        'inactiveDisk' => 'InactiveDisk',
    ];

    public function validate()
    {
        if (\is_array($this->inactiveDisk)) {
            Model::validateArray($this->inactiveDisk);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inactiveDisk) {
            if (\is_array($this->inactiveDisk)) {
                $res['InactiveDisk'] = [];
                $n1 = 0;
                foreach ($this->inactiveDisk as $item1) {
                    $res['InactiveDisk'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['InactiveDisk'])) {
            if (!empty($map['InactiveDisk'])) {
                $model->inactiveDisk = [];
                $n1 = 0;
                foreach ($map['InactiveDisk'] as $item1) {
                    $model->inactiveDisk[$n1] = inactiveDisk::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
