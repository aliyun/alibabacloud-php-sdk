<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListCpfsFileSystemsResponseBody\fileSystemList\fileSystems;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EHPC\V20180412\Models\ListCpfsFileSystemsResponseBody\fileSystemList\fileSystems\mountTargetList\mountTargets;

class mountTargetList extends Model
{
    /**
     * @var mountTargets[]
     */
    public $mountTargets;
    protected $_name = [
        'mountTargets' => 'MountTargets',
    ];

    public function validate()
    {
        if (\is_array($this->mountTargets)) {
            Model::validateArray($this->mountTargets);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mountTargets) {
            if (\is_array($this->mountTargets)) {
                $res['MountTargets'] = [];
                $n1 = 0;
                foreach ($this->mountTargets as $item1) {
                    $res['MountTargets'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MountTargets'])) {
            if (!empty($map['MountTargets'])) {
                $model->mountTargets = [];
                $n1 = 0;
                foreach ($map['MountTargets'] as $item1) {
                    $model->mountTargets[$n1++] = mountTargets::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
