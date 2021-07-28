<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class CreateTriggerResponseBody extends Model
{
    /**
     * @description 触发器ID。
     *
     * @var string
     */
    public $id;

    /**
     * @description 集群ID。
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description 触发器项目名称。
     *
     * @var string
     */
    public $projectId;

    /**
     * @description 触发器类型。默认值为 deployment 。
     *
     * @var string
     */
    public $type;

    /**
     * @description 触发器行为。
     *
     * @var string
     */
    public $action;
    protected $_name = [
        'id'        => 'id',
        'clusterId' => 'cluster_id',
        'projectId' => 'project_id',
        'type'      => 'type',
        'action'    => 'action',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTriggerResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['id'])) {
            $model->id = $map['id'];
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

        return $model;
    }
}
