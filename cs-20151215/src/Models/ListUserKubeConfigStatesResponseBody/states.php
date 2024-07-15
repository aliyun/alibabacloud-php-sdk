<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\ListUserKubeConfigStatesResponseBody;

use AlibabaCloud\Tea\Model;

class states extends Model
{
    /**
     * @example 2026-11-30T07:41:50Z
     *
     * @var string
     */
    public $certExpireTime;

    /**
     * @example Unissued
     *
     * @var string
     */
    public $certState;

    /**
     * @example c5b5e80b0b64a4bf6939d2d8fbbc5****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example cluster-demo
     *
     * @var string
     */
    public $clusterName;

    /**
     * @example running
     *
     * @var string
     */
    public $clusterState;
    protected $_name = [
        'certExpireTime' => 'cert_expire_time',
        'certState'      => 'cert_state',
        'clusterId'      => 'cluster_id',
        'clusterName'    => 'cluster_name',
        'clusterState'   => 'cluster_state',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->certExpireTime) {
            $res['cert_expire_time'] = $this->certExpireTime;
        }
        if (null !== $this->certState) {
            $res['cert_state'] = $this->certState;
        }
        if (null !== $this->clusterId) {
            $res['cluster_id'] = $this->clusterId;
        }
        if (null !== $this->clusterName) {
            $res['cluster_name'] = $this->clusterName;
        }
        if (null !== $this->clusterState) {
            $res['cluster_state'] = $this->clusterState;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return states
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cert_expire_time'])) {
            $model->certExpireTime = $map['cert_expire_time'];
        }
        if (isset($map['cert_state'])) {
            $model->certState = $map['cert_state'];
        }
        if (isset($map['cluster_id'])) {
            $model->clusterId = $map['cluster_id'];
        }
        if (isset($map['cluster_name'])) {
            $model->clusterName = $map['cluster_name'];
        }
        if (isset($map['cluster_state'])) {
            $model->clusterState = $map['cluster_state'];
        }

        return $model;
    }
}
