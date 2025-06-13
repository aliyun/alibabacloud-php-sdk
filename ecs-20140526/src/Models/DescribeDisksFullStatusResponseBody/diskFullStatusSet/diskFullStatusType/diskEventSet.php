<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksFullStatusResponseBody\diskFullStatusSet\diskFullStatusType;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksFullStatusResponseBody\diskFullStatusSet\diskFullStatusType\diskEventSet\diskEventType;

class diskEventSet extends Model
{
    /**
     * @var diskEventType[]
     */
    public $diskEventType;
    protected $_name = [
        'diskEventType' => 'DiskEventType',
    ];

    public function validate()
    {
        if (\is_array($this->diskEventType)) {
            Model::validateArray($this->diskEventType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->diskEventType) {
            if (\is_array($this->diskEventType)) {
                $res['DiskEventType'] = [];
                $n1 = 0;
                foreach ($this->diskEventType as $item1) {
                    $res['DiskEventType'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DiskEventType'])) {
            if (!empty($map['DiskEventType'])) {
                $model->diskEventType = [];
                $n1 = 0;
                foreach ($map['DiskEventType'] as $item1) {
                    $model->diskEventType[$n1] = diskEventType::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
