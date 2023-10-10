<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\AppConfig;

use AlibabaCloud\SDK\Edas\V20170801\Models\AppConfig\pvcMountDescs\mountPaths;
use AlibabaCloud\Tea\Model;

class pvcMountDescs extends Model
{
    /**
     * @var mountPaths[]
     */
    public $mountPaths;

    /**
     * @var string
     */
    public $pvcName;
    protected $_name = [
        'mountPaths' => 'MountPaths',
        'pvcName'    => 'PvcName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mountPaths) {
            $res['MountPaths'] = [];
            if (null !== $this->mountPaths && \is_array($this->mountPaths)) {
                $n = 0;
                foreach ($this->mountPaths as $item) {
                    $res['MountPaths'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pvcName) {
            $res['PvcName'] = $this->pvcName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pvcMountDescs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MountPaths'])) {
            if (!empty($map['MountPaths'])) {
                $model->mountPaths = [];
                $n                 = 0;
                foreach ($map['MountPaths'] as $item) {
                    $model->mountPaths[$n++] = null !== $item ? mountPaths::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PvcName'])) {
            $model->pvcName = $map['PvcName'];
        }

        return $model;
    }
}
