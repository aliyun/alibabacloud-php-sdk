<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksFullStatusResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksFullStatusResponseBody\diskFullStatusSet\diskFullStatusType;

class diskFullStatusSet extends Model
{
    /**
     * @var diskFullStatusType[]
     */
    public $diskFullStatusType;
    protected $_name = [
        'diskFullStatusType' => 'DiskFullStatusType',
    ];

    public function validate()
    {
        if (\is_array($this->diskFullStatusType)) {
            Model::validateArray($this->diskFullStatusType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->diskFullStatusType) {
            if (\is_array($this->diskFullStatusType)) {
                $res['DiskFullStatusType'] = [];
                $n1 = 0;
                foreach ($this->diskFullStatusType as $item1) {
                    $res['DiskFullStatusType'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DiskFullStatusType'])) {
            if (!empty($map['DiskFullStatusType'])) {
                $model->diskFullStatusType = [];
                $n1 = 0;
                foreach ($map['DiskFullStatusType'] as $item1) {
                    $model->diskFullStatusType[$n1] = diskFullStatusType::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
