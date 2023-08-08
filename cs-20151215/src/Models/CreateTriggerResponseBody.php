<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class CreateTriggerResponseBody extends Model
{
    /**
     * @description The action that the trigger performs. For example, a value of `redeploy` indicates that the trigger redeploys the application.
     *
     * @example redeploy
     *
     * @var string
     */
    public $action;

    /**
     * @description The ID of the cluster.
     *
     * @example c93095129fc41463aa455d89444fd****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The ID of the trigger.
     *
     * @example 102536
     *
     * @var string
     */
    public $id;

    /**
     * @description The name of the project.
     *
     * @example default/test-app
     *
     * @var string
     */
    public $projectId;

    /**
     * @description The type of trigger. Default value: deployment.
     *
     * @example deployment
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'action'    => 'action',
        'clusterId' => 'cluster_id',
        'id'        => 'id',
        'projectId' => 'project_id',
        'type'      => 'type',
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
        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
