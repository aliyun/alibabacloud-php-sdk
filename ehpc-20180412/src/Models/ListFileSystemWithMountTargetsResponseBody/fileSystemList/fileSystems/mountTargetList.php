<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListFileSystemWithMountTargetsResponseBody\fileSystemList\fileSystems;

use AlibabaCloud\SDK\EHPC\V20180412\Models\ListFileSystemWithMountTargetsResponseBody\fileSystemList\fileSystems\mountTargetList\mountTargets;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mountTargets) {
            $res['MountTargets'] = [];
            if (null !== $this->mountTargets && \is_array($this->mountTargets)) {
                $n = 0;
                foreach ($this->mountTargets as $item) {
                    $res['MountTargets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mountTargetList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MountTargets'])) {
            if (!empty($map['MountTargets'])) {
                $model->mountTargets = [];
                $n                   = 0;
                foreach ($map['MountTargets'] as $item) {
                    $model->mountTargets[$n++] = null !== $item ? mountTargets::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
