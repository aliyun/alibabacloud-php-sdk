<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DescribeAddonRequest extends Model
{
    /**
     * @example c02b3e03be10643e8a644a843ffcb****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example ack.pro.small
     *
     * @var string
     */
    public $clusterSpec;

    /**
     * @example ManagedKubernetes
     *
     * @var string
     */
    public $clusterType;

    /**
     * @example 1.26.3-aliyun.1
     *
     * @var string
     */
    public $clusterVersion;

    /**
     * @example Default
     *
     * @var string
     */
    public $profile;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example v1.9.3.10-7dfca203-aliyun
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'clusterId'      => 'cluster_id',
        'clusterSpec'    => 'cluster_spec',
        'clusterType'    => 'cluster_type',
        'clusterVersion' => 'cluster_version',
        'profile'        => 'profile',
        'regionId'       => 'region_id',
        'version'        => 'version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['cluster_id'] = $this->clusterId;
        }
        if (null !== $this->clusterSpec) {
            $res['cluster_spec'] = $this->clusterSpec;
        }
        if (null !== $this->clusterType) {
            $res['cluster_type'] = $this->clusterType;
        }
        if (null !== $this->clusterVersion) {
            $res['cluster_version'] = $this->clusterVersion;
        }
        if (null !== $this->profile) {
            $res['profile'] = $this->profile;
        }
        if (null !== $this->regionId) {
            $res['region_id'] = $this->regionId;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAddonRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cluster_id'])) {
            $model->clusterId = $map['cluster_id'];
        }
        if (isset($map['cluster_spec'])) {
            $model->clusterSpec = $map['cluster_spec'];
        }
        if (isset($map['cluster_type'])) {
            $model->clusterType = $map['cluster_type'];
        }
        if (isset($map['cluster_version'])) {
            $model->clusterVersion = $map['cluster_version'];
        }
        if (isset($map['profile'])) {
            $model->profile = $map['profile'];
        }
        if (isset($map['region_id'])) {
            $model->regionId = $map['region_id'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
