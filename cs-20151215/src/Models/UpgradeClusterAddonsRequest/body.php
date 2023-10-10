<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\UpgradeClusterAddonsRequest;

use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @description The name of the component.
     *
     * @example coredns
     *
     * @var string
     */
    public $componentName;

    /**
     * @description The custom component settings that you want to use. The value is a JSON string.
     *
     * @example {\"CpuRequest\":\"800m\"}
     *
     * @var string
     */
    public $config;

    /**
     * @description The version to which the component can be updated. You can call the `DescribeClusterAddonsVersion` operation to query the version to which the component can be updated.
     *
     * @example 1.6.7
     *
     * @var string
     */
    public $nextVersion;

    /**
     * @description The update policy. Valid values:
     *
     *   overwrite
     *   canary
     *
     * @example canary
     *
     * @var string
     */
    public $policy;

    /**
     * @description The current version of the component.
     *
     * @example v1.6.2
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'componentName' => 'component_name',
        'config'        => 'config',
        'nextVersion'   => 'next_version',
        'policy'        => 'policy',
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
        if (null !== $this->config) {
            $res['config'] = $this->config;
        }
        if (null !== $this->nextVersion) {
            $res['next_version'] = $this->nextVersion;
        }
        if (null !== $this->policy) {
            $res['policy'] = $this->policy;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return body
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['component_name'])) {
            $model->componentName = $map['component_name'];
        }
        if (isset($map['config'])) {
            $model->config = $map['config'];
        }
        if (isset($map['next_version'])) {
            $model->nextVersion = $map['next_version'];
        }
        if (isset($map['policy'])) {
            $model->policy = $map['policy'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
