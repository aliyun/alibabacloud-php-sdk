<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class CreateKubernetesTriggerRequest extends Model
{
    /**
     * @description The action that the trigger performs. Set the value to redeploy.
     *
     * `redeploy`: redeploys the resources specified by `project_id`.
     * @example redeploy
     *
     * @var string
     */
    public $action;

    /**
     * @description The cluster ID.
     *
     * @example c5cdf7e3938bc4f8eb0e44b21a80f****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the trigger project.
     *
     * Example: `default/test-app`.
     * @example default/test-app
     *
     * @var string
     */
    public $projectId;

    /**
     * @description The type of trigger. Valid values:
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
    protected $_name = [
        'action'    => 'action',
        'clusterId' => 'cluster_id',
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
     * @return CreateKubernetesTriggerRequest
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
        if (isset($map['project_id'])) {
            $model->projectId = $map['project_id'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
