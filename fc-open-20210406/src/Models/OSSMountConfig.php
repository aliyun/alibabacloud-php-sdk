<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCOpen\V20210406\Models;

use AlibabaCloud\SDK\FCOpen\V20210406\Models\OSSMountConfig\mountPoints;
use AlibabaCloud\Tea\Model;

class OSSMountConfig extends Model
{
    /**
     * @var mountPoints[]
     */
    public $mountPoints;
    protected $_name = [
        'mountPoints' => 'mountPoints',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mountPoints) {
            $res['mountPoints'] = [];
            if (null !== $this->mountPoints && \is_array($this->mountPoints)) {
                $n = 0;
                foreach ($this->mountPoints as $item) {
                    $res['mountPoints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return OSSMountConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['mountPoints'])) {
            if (!empty($map['mountPoints'])) {
                $model->mountPoints = [];
                $n                  = 0;
                foreach ($map['mountPoints'] as $item) {
                    $model->mountPoints[$n++] = null !== $item ? mountPoints::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
