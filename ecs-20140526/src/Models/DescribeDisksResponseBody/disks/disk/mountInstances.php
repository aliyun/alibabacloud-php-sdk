<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksResponseBody\disks\disk;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeDisksResponseBody\disks\disk\mountInstances\mountInstance;

class mountInstances extends Model
{
    /**
     * @var mountInstance[]
     */
    public $mountInstance;
    protected $_name = [
        'mountInstance' => 'MountInstance',
    ];

    public function validate()
    {
        if (\is_array($this->mountInstance)) {
            Model::validateArray($this->mountInstance);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mountInstance) {
            if (\is_array($this->mountInstance)) {
                $res['MountInstance'] = [];
                $n1 = 0;
                foreach ($this->mountInstance as $item1) {
                    $res['MountInstance'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MountInstance'])) {
            if (!empty($map['MountInstance'])) {
                $model->mountInstance = [];
                $n1 = 0;
                foreach ($map['MountInstance'] as $item1) {
                    $model->mountInstance[$n1++] = mountInstance::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
