<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponseBody\fileSystems\fileSystem;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponseBody\fileSystems\fileSystem\mountTargets\mountTarget;

class mountTargets extends Model
{
    /**
     * @var mountTarget[]
     */
    public $mountTarget;
    protected $_name = [
        'mountTarget' => 'MountTarget',
    ];

    public function validate()
    {
        if (\is_array($this->mountTarget)) {
            Model::validateArray($this->mountTarget);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mountTarget) {
            if (\is_array($this->mountTarget)) {
                $res['MountTarget'] = [];
                $n1                 = 0;
                foreach ($this->mountTarget as $item1) {
                    $res['MountTarget'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MountTarget'])) {
            if (!empty($map['MountTarget'])) {
                $model->mountTarget = [];
                $n1                 = 0;
                foreach ($map['MountTarget'] as $item1) {
                    $model->mountTarget[$n1++] = mountTarget::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
