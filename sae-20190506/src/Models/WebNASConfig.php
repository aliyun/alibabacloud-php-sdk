<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class WebNASConfig extends Model
{
    /**
     * @var WebNASMountPoint[]
     */
    public $mountPoints;
    protected $_name = [
        'mountPoints' => 'MountPoints',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mountPoints) {
            $res['MountPoints'] = [];
            if (null !== $this->mountPoints && \is_array($this->mountPoints)) {
                $n = 0;
                foreach ($this->mountPoints as $item) {
                    $res['MountPoints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return WebNASConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MountPoints'])) {
            if (!empty($map['MountPoints'])) {
                $model->mountPoints = [];
                $n                  = 0;
                foreach ($map['MountPoints'] as $item) {
                    $model->mountPoints[$n++] = null !== $item ? WebNASMountPoint::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
