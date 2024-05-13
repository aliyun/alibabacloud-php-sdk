<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class UpgradeClusterRequest extends Model
{
    /**
     * @description The name of the component. Set the value to `k8s`.
     *
     * @example k8s
     *
     * @deprecated
     *
     * @var string
     */
    public $componentName;

    /**
     * @description Specifies whether to update only master nodes. Valid values:
     *
     *   true: update only master nodes.
     *   false: update master and worker nodes.
     *
     * @example true
     *
     * @var bool
     */
    public $masterOnly;

    /**
     * @description The Kubernetes version to which the cluster can be updated.
     *
     * @example 1.16.9-aliyun.1
     *
     * @var string
     */
    public $nextVersion;

    /**
     * @description The current Kubernetes version of the cluster. For more information, see [Kubernetes versions](https://help.aliyun.com/document_detail/185269.html).
     *
     * @example 1.14.8-aliyun.1
     *
     * @deprecated
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'componentName' => 'component_name',
        'masterOnly'    => 'master_only',
        'nextVersion'   => 'next_version',
        'version'       => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->componentName) {
            $res['component_name'] = $this->componentName;
        }
        if (null !== $this->masterOnly) {
            $res['master_only'] = $this->masterOnly;
        }
        if (null !== $this->nextVersion) {
            $res['next_version'] = $this->nextVersion;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
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
        if (isset($map['component_name'])) {
            $model->componentName = $map['component_name'];
        }
        if (isset($map['master_only'])) {
            $model->masterOnly = $map['master_only'];
        }
        if (isset($map['next_version'])) {
            $model->nextVersion = $map['next_version'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
