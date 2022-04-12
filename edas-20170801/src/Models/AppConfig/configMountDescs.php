<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\AppConfig;

use AlibabaCloud\SDK\Edas\V20170801\Models\AppConfig\configMountDescs\mountItems;
use AlibabaCloud\Tea\Model;

class configMountDescs extends Model
{
    /**
     * @description 挂载条目
     *
     * @var mountItems[]
     */
    public $mountItems;

    /**
     * @description 挂载路径
     *
     * @var string
     */
    public $mountPath;

    /**
     * @description 名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 类型
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'mountItems' => 'MountItems',
        'mountPath'  => 'MountPath',
        'name'       => 'Name',
        'type'       => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mountItems) {
            $res['MountItems'] = [];
            if (null !== $this->mountItems && \is_array($this->mountItems)) {
                $n = 0;
                foreach ($this->mountItems as $item) {
                    $res['MountItems'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->mountPath) {
            $res['MountPath'] = $this->mountPath;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configMountDescs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MountItems'])) {
            if (!empty($map['MountItems'])) {
                $model->mountItems = [];
                $n                 = 0;
                foreach ($map['MountItems'] as $item) {
                    $model->mountItems[$n++] = null !== $item ? mountItems::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MountPath'])) {
            $model->mountPath = $map['MountPath'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
