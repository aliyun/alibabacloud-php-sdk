<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\AppConfig;

use AlibabaCloud\Tea\Model;

class localVolumes extends Model
{
    /**
     * @description 容器挂载路径
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
     * @description 节点路径
     *
     * @var string
     */
    public $nodePath;

    /**
     * @description 权限类型
     *
     * @var int
     */
    public $opsAuth;

    /**
     * @description 类型
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'mountPath' => 'MountPath',
        'name'      => 'Name',
        'nodePath'  => 'NodePath',
        'opsAuth'   => 'OpsAuth',
        'type'      => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mountPath) {
            $res['MountPath'] = $this->mountPath;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nodePath) {
            $res['NodePath'] = $this->nodePath;
        }
        if (null !== $this->opsAuth) {
            $res['OpsAuth'] = $this->opsAuth;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return localVolumes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MountPath'])) {
            $model->mountPath = $map['MountPath'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NodePath'])) {
            $model->nodePath = $map['NodePath'];
        }
        if (isset($map['OpsAuth'])) {
            $model->opsAuth = $map['OpsAuth'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
