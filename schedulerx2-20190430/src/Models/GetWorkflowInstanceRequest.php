<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models;

use AlibabaCloud\Dara\Model;

class GetWorkflowInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $namespaceSource;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $wfInstanceId;

    /**
     * @var int
     */
    public $workflowId;
    protected $_name = [
        'groupId' => 'GroupId',
        'namespace' => 'Namespace',
        'namespaceSource' => 'NamespaceSource',
        'regionId' => 'RegionId',
        'wfInstanceId' => 'WfInstanceId',
        'workflowId' => 'WorkflowId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->wfInstanceId) {
            $res['WfInstanceId'] = $this->wfInstanceId;
        }

        if (null !== $this->workflowId) {
            $res['WorkflowId'] = $this->workflowId;
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

        if (isset($map['WfInstanceId'])) {
            $model->wfInstanceId = $map['WfInstanceId'];
        }

        if (isset($map['WorkflowId'])) {
            $model->workflowId = $map['WorkflowId'];
        }

        return $model;
    }
}
