<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeAddonResponseBody;

use AlibabaCloud\Tea\Model;

class newerVersions extends Model
{
    /**
     * @example 1.20.4
     *
     * @var string
     */
    public $minimumClusterVersion;

    /**
     * @example true
     *
     * @var bool
     */
    public $upgradable;

    /**
     * @example v1.9.3.10-7dfca203-aliyun
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'minimumClusterVersion' => 'minimum_cluster_version',
        'upgradable'            => 'upgradable',
        'version'               => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->minimumClusterVersion) {
            $res['minimum_cluster_version'] = $this->minimumClusterVersion;
        }
        if (null !== $this->upgradable) {
            $res['upgradable'] = $this->upgradable;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return newerVersions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['minimum_cluster_version'])) {
            $model->minimumClusterVersion = $map['minimum_cluster_version'];
        }
        if (isset($map['upgradable'])) {
            $model->upgradable = $map['upgradable'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
