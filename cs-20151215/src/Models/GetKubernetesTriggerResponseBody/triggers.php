<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\GetKubernetesTriggerResponseBody;

use AlibabaCloud\Tea\Model;

class triggers extends Model
{
    /**
     * @description 触发器行为。
     *
     * @var string
     */
    public $action;

    /**
     * @description 集群ID。
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description 触发器ID。
     *
     * @var string
     */
    public $id;

    /**
     * @description 项目ID，格式为：${namepsce}/${应用名}，
     *
     * @var string
     */
    public $projectId;

    /**
     * @description 触发器Token。
     *
     * @var string
     */
    public $token;
    protected $_name = [
        'action'    => 'action',
        'clusterId' => 'cluster_id',
        'id'        => 'id',
        'projectId' => 'project_id',
        'token'     => 'token',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['action'] = $this->action;
        }
        if (null !== $this->clusterId) {
            $res['cluster_id'] = $this->clusterId;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->projectId) {
            $res['project_id'] = $this->projectId;
        }
        if (null !== $this->token) {
            $res['token'] = $this->token;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return triggers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['action'])) {
            $model->action = $map['action'];
        }
        if (isset($map['cluster_id'])) {
            $model->clusterId = $map['cluster_id'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['project_id'])) {
            $model->projectId = $map['project_id'];
        }
        if (isset($map['token'])) {
            $model->token = $map['token'];
        }

        return $model;
    }
}
