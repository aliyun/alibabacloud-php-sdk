<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\UpdateWorkflowNodeConfigurationRequest\executor;

class UpdateWorkflowNodeConfigurationRequest extends Model
{
    /**
     * @var string
     */
    public $collaborationGroupId;

    /**
     * @var executor
     */
    public $executor;

    /**
     * @var int
     */
    public $expectedVersion;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $model;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var int[]
     */
    public $responsibleUserIds;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'collaborationGroupId' => 'collaborationGroupId',
        'executor' => 'executor',
        'expectedVersion' => 'expectedVersion',
        'instanceId' => 'instanceId',
        'model' => 'model',
        'nodeId' => 'nodeId',
        'responsibleUserIds' => 'responsibleUserIds',
        'tenantId' => 'tenantId',
    ];

    public function validate()
    {
        if (null !== $this->executor) {
            $this->executor->validate();
        }
        if (\is_array($this->responsibleUserIds)) {
            Model::validateArray($this->responsibleUserIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->collaborationGroupId) {
            $res['collaborationGroupId'] = $this->collaborationGroupId;
        }

        if (null !== $this->executor) {
            $res['executor'] = null !== $this->executor ? $this->executor->toArray($noStream) : $this->executor;
        }

        if (null !== $this->expectedVersion) {
            $res['expectedVersion'] = $this->expectedVersion;
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->model) {
            $res['model'] = $this->model;
        }

        if (null !== $this->nodeId) {
            $res['nodeId'] = $this->nodeId;
        }

        if (null !== $this->responsibleUserIds) {
            if (\is_array($this->responsibleUserIds)) {
                $res['responsibleUserIds'] = [];
                $n1 = 0;
                foreach ($this->responsibleUserIds as $item1) {
                    $res['responsibleUserIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
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
        if (isset($map['collaborationGroupId'])) {
            $model->collaborationGroupId = $map['collaborationGroupId'];
        }

        if (isset($map['executor'])) {
            $model->executor = executor::fromMap($map['executor']);
        }

        if (isset($map['expectedVersion'])) {
            $model->expectedVersion = $map['expectedVersion'];
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['model'])) {
            $model->model = $map['model'];
        }

        if (isset($map['nodeId'])) {
            $model->nodeId = $map['nodeId'];
        }

        if (isset($map['responsibleUserIds'])) {
            if (!empty($map['responsibleUserIds'])) {
                $model->responsibleUserIds = [];
                $n1 = 0;
                foreach ($map['responsibleUserIds'] as $item1) {
                    $model->responsibleUserIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        return $model;
    }
}
