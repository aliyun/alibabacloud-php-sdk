<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class UpgradeClusterRequest extends Model
{
    /**
     * @description 集群ID。
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description 组件名称，集群升级时取值"k8s"。
     *
     * @var string
     */
    public $componentName;

    /**
     * @description 当前版本。
     *
     * @var string
     */
    public $version;

    /**
     * @description 目标版本。
     *
     * @var string
     */
    public $nextVersion;
    protected $_name = [
        'clusterId'     => 'ClusterId',
        'componentName' => 'component_name',
        'version'       => 'version',
        'nextVersion'   => 'next_version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->componentName) {
            $res['component_name'] = $this->componentName;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }
        if (null !== $this->nextVersion) {
            $res['next_version'] = $this->nextVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpgradeClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['component_name'])) {
            $model->componentName = $map['component_name'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }
        if (isset($map['next_version'])) {
            $model->nextVersion = $map['next_version'];
        }

        return $model;
    }
}
