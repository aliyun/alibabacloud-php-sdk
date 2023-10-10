<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\GetKubernetesTriggerResponse;

use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @description The ID of the trigger.
     *
     * @example 1234
     *
     * @var string
     */
    public $id;

    /**
     * @description The name of the trigger.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the associated cluster.
     *
     * @example c259f563386444ebb8d7**
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the project.
     *
     * The name consists of the namespace where the application is deployed and the name of the application. The format is `${namespace}/${name}`. Example: default/test-app.
     * @example default/test-app
     *
     * @var string
     */
    public $projectId;

    /**
     * @description The type of trigger.
     *
     * Valid values:
     *
     *   `deployment`: performs actions on Deployments.
     *   `application`: performs actions on applications that are deployed in Application Center.
     *
     * Default value: `deployment`.
     * @example deployment
     *
     * @var string
     */
    public $type;

    /**
     * @description The action that the trigger performs. The value is set to redeploy.
     *
     * `redeploy`: redeploys the resource specified by project_id.
     * @example redeploy
     *
     * @var string
     */
    public $action;

    /**
     * @description Token
     *
     * @example eyJhbGci***
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
