<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models;

use AlibabaCloud\Tea\Model;

class GetWorkFlowRequest extends Model
{
    /**
     * @description The ID of the application group.
     *
     * @example hxm.test
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The ID of the namespace.
     *
     * @example 4a06d5ea-f576-4326-842c-fb14ea043d8d
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The source of the namespcae.
     *
     * @example source
     *
     * @var string
     */
    public $namespaceSource;

    /**
     * @description The region information.
     *
     * @example public
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the workflow.
     *
     * @example 1234
     *
     * @var int
     */
    public $workflowId;
    protected $_name = [
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
     * @return GetWorkFlowRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
