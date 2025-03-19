<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeMountTargetsResponseBody;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeMountTargetsResponseBody\mountTargets\mountTarget;
use AlibabaCloud\Tea\Model;

class mountTargets extends Model
{
    /**
     * @var mountTarget[]
     */
    public $mountTarget;
    protected $_name = [
        'mountTarget' => 'MountTarget',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->mountTarget) {
            $res['MountTarget'] = [];
            if (null !== $this->mountTarget && \is_array($this->mountTarget)) {
                $n = 0;
                foreach ($this->mountTarget as $item) {
                    $res['MountTarget'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mountTargets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MountTarget'])) {
            if (!empty($map['MountTarget'])) {
                $model->mountTarget = [];
                $n = 0;
                foreach ($map['MountTarget'] as $item) {
                    $model->mountTarget[$n++] = null !== $item ? mountTarget::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
