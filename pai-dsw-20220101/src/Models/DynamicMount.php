<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\Tea\Model;

class DynamicMount extends Model
{
    /**
     * @var bool
     */
    public $enable;

    /**
     * @var DynamicMountPoint[]
     */
    public $mountPoints;
    protected $_name = [
        'enable' => 'Enable',
        'mountPoints' => 'MountPoints',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
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
     * @return DynamicMount
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['MountPoints'])) {
            if (!empty($map['MountPoints'])) {
                $model->mountPoints = [];
                $n = 0;
                foreach ($map['MountPoints'] as $item) {
                    $model->mountPoints[$n++] = null !== $item ? DynamicMountPoint::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
