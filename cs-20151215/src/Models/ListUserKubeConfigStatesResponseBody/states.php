<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\ListUserKubeConfigStatesResponseBody;

use AlibabaCloud\Dara\Model;

class states extends Model
{
    /**
     * @var string
     */
    public $certExpireTime;
    /**
     * @var string
     */
    public $certState;
    /**
     * @var string
     */
    public $clusterId;
    /**
     * @var string
     */
    public $clusterName;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
