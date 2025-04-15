<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->mountPoints)) {
            Model::validateArray($this->mountPoints);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mountPoints) {
            if (\is_array($this->mountPoints)) {
                $res['MountPoints'] = [];
                $n1 = 0;
                foreach ($this->mountPoints as $item1) {
                    $res['MountPoints'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['MountPoints'])) {
            if (!empty($map['MountPoints'])) {
                $model->mountPoints = [];
                $n1 = 0;
                foreach ($map['MountPoints'] as $item1) {
                    $model->mountPoints[$n1++] = WebNASMountPoint::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
