<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models;

use AlibabaCloud\Tea\Model;

class UpdateWorkflowDagRequest extends Model
{
    /**
     * @description The directed acyclic graph (DAG) of the workflow, including the information about the nodes and the edges. Specify the value of this parameter in the JSON format.
     *
     * This parameter is required.
     * @example {"nodes":[{"id":2300691},{"id":10518089},{"id":1758851}],"edges":[{"source":10518089,"target":1758851},{"source":10518089,"target":2300691}]}
     *
     * @var string
     */
    public $dagJson;

    /**
     * @description The application group ID. You can obtain the application group ID on the Application Management page in the SchedulerX console.
     *
     * This parameter is required.
     * @example testSchedulerx.defaultGroup
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The namespace ID. You can obtain the namespace ID on the Namespace page in the SchedulerX console.
     *
     * This parameter is required.
     * @example adcfc35d-e2fe-4fe9-bbaa-20e90ffc****
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The source of the namespace. This parameter is required only for a special third party.
     *
     * @example schedulerx
     *
     * @var string
     */
    public $namespaceSource;

    /**
     * @description The region ID.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The workflow ID.
     *
     * This parameter is required.
     * @example 123
     *
     * @var string
     */
    public $workflowId;
    protected $_name = [
        'dagJson'         => 'DagJson',
        'groupId'         => 'GroupId',
        'namespace'       => 'Namespace',
        'namespaceSource' => 'NamespaceSource',
        'regionId'        => 'RegionId',
        'workflowId'      => 'WorkflowId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dagJson) {
            $res['DagJson'] = $this->dagJson;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->namespaceSource) {
            $res['NamespaceSource'] = $this->namespaceSource;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->workflowId) {
            $res['WorkflowId'] = $this->workflowId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateWorkflowDagRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DagJson'])) {
            $model->dagJson = $map['DagJson'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['NamespaceSource'])) {
            $model->namespaceSource = $map['NamespaceSource'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['WorkflowId'])) {
            $model->workflowId = $map['WorkflowId'];
        }

        return $model;
    }
}
