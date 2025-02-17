<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagesResponseBody\images\image;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImagesResponseBody\images\image\diskDeviceMappings\diskDeviceMapping;

class diskDeviceMappings extends Model
{
    /**
     * @var diskDeviceMapping[]
     */
    public $diskDeviceMapping;
    protected $_name = [
        'diskDeviceMapping' => 'DiskDeviceMapping',
    ];

    public function validate()
    {
        if (\is_array($this->diskDeviceMapping)) {
            Model::validateArray($this->diskDeviceMapping);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->diskDeviceMapping) {
            if (\is_array($this->diskDeviceMapping)) {
                $res['DiskDeviceMapping'] = [];
                $n1                       = 0;
                foreach ($this->diskDeviceMapping as $item1) {
                    $res['DiskDeviceMapping'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['DiskDeviceMapping'])) {
            if (!empty($map['DiskDeviceMapping'])) {
                $model->diskDeviceMapping = [];
                $n1                       = 0;
                foreach ($map['DiskDeviceMapping'] as $item1) {
                    $model->diskDeviceMapping[$n1++] = diskDeviceMapping::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
