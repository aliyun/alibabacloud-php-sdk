<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\GetKubernetesTriggerResponse;

use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @description 触发器ID。
     *
     * @var string
     */
    public $id;

    /**
     * @description 触发器名称。
     *
     * @var string
     */
    public $name;

    /**
     * @description 集群ID
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description 触发器项目名称
     *
     * @var string
     */
    public $projectId;

    /**
     * @description 触发器类型。
     *
     * @var string
     */
    public $type;

    /**
     * @description 触发器行为
     *
     * @var string
     */
    public $action;

    /**
     * @description Token
     *
     * @var string
     */
    public $token;
    protected $_name = [
        'id'        => 'id',
        'name'      => 'name',
        'clusterId' => 'cluster_id',
        'projectId' => 'project_id',
        'type'      => 'type',
        'action'    => 'action',
        'token'     => 'token',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->clusterId) {
            $res['cluster_id'] = $this->clusterId;
        }
        if (null !== $this->projectId) {
            $res['project_id'] = $this->projectId;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }
        if (null !== $this->action) {
            $res['action'] = $this->action;
        }
        if (null !== $this->token) {
            $res['token'] = $this->token;
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
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['cluster_id'])) {
            $model->clusterId = $map['cluster_id'];
        }
        if (isset($map['project_id'])) {
            $model->projectId = $map['project_id'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }
        if (isset($map['action'])) {
            $model->action = $map['action'];
        }
        if (isset($map['token'])) {
            $model->token = $map['token'];
        }

        return $model;
    }
}
