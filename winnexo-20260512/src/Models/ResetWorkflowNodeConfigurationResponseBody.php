<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ResetWorkflowNodeConfigurationResponseBody\defaultExecutor;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ResetWorkflowNodeConfigurationResponseBody\effectiveExecutor;
use AlibabaCloud\SDK\WinNexo\V20260512\Models\ResetWorkflowNodeConfigurationResponseBody\overrides;

class ResetWorkflowNodeConfigurationResponseBody extends Model
{
    /**
     * @var bool
     */
    public $canEdit;

    /**
     * @var string
     */
    public $code;

    /**
     * @var int
     */
    public $configVersion;

    /**
     * @var defaultExecutor
     */
    public $defaultExecutor;

    /**
     * @var string
     */
    public $defaultModel;

    /**
     * @var string[]
     */
    public $defaultResponsibleUserIds;

    /**
     * @var effectiveExecutor
     */
    public $effectiveExecutor;

    /**
     * @var string
     */
    public $effectiveModel;

    /**
     * @var string[]
     */
    public $effectiveResponsibleUserIds;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var overrides
     */
    public $overrides;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $stateVersion;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var int
     */
    public $updatedBy;
    protected $_name = [
        'canEdit' => 'canEdit',
        'code' => 'code',
        'configVersion' => 'configVersion',
        'defaultExecutor' => 'defaultExecutor',
        'defaultModel' => 'defaultModel',
        'defaultResponsibleUserIds' => 'defaultResponsibleUserIds',
        'effectiveExecutor' => 'effectiveExecutor',
        'effectiveModel' => 'effectiveModel',
        'effectiveResponsibleUserIds' => 'effectiveResponsibleUserIds',
        'instanceId' => 'instanceId',
        'message' => 'message',
        'nodeId' => 'nodeId',
        'overrides' => 'overrides',
        'requestId' => 'requestId',
        'stateVersion' => 'stateVersion',
        'updatedAt' => 'updatedAt',
        'updatedBy' => 'updatedBy',
    ];

    public function validate()
    {
        if (null !== $this->defaultExecutor) {
            $this->defaultExecutor->validate();
        }
        if (\is_array($this->defaultResponsibleUserIds)) {
            Model::validateArray($this->defaultResponsibleUserIds);
        }
        if (null !== $this->effectiveExecutor) {
            $this->effectiveExecutor->validate();
        }
        if (\is_array($this->effectiveResponsibleUserIds)) {
            Model::validateArray($this->effectiveResponsibleUserIds);
        }
        if (null !== $this->overrides) {
            $this->overrides->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->canEdit) {
            $res['canEdit'] = $this->canEdit;
        }

        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->configVersion) {
            $res['configVersion'] = $this->configVersion;
        }

        if (null !== $this->defaultExecutor) {
            $res['defaultExecutor'] = null !== $this->defaultExecutor ? $this->defaultExecutor->toArray($noStream) : $this->defaultExecutor;
        }

        if (null !== $this->defaultModel) {
            $res['defaultModel'] = $this->defaultModel;
        }

        if (null !== $this->defaultResponsibleUserIds) {
            if (\is_array($this->defaultResponsibleUserIds)) {
                $res['defaultResponsibleUserIds'] = [];
                $n1 = 0;
                foreach ($this->defaultResponsibleUserIds as $item1) {
                    $res['defaultResponsibleUserIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->effectiveExecutor) {
            $res['effectiveExecutor'] = null !== $this->effectiveExecutor ? $this->effectiveExecutor->toArray($noStream) : $this->effectiveExecutor;
        }

        if (null !== $this->effectiveModel) {
            $res['effectiveModel'] = $this->effectiveModel;
        }

        if (null !== $this->effectiveResponsibleUserIds) {
            if (\is_array($this->effectiveResponsibleUserIds)) {
                $res['effectiveResponsibleUserIds'] = [];
                $n1 = 0;
                foreach ($this->effectiveResponsibleUserIds as $item1) {
                    $res['effectiveResponsibleUserIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->nodeId) {
            $res['nodeId'] = $this->nodeId;
        }

        if (null !== $this->overrides) {
            $res['overrides'] = null !== $this->overrides ? $this->overrides->toArray($noStream) : $this->overrides;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->stateVersion) {
            $res['stateVersion'] = $this->stateVersion;
        }

        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
        }

        if (null !== $this->updatedBy) {
            $res['updatedBy'] = $this->updatedBy;
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
        if (isset($map['canEdit'])) {
            $model->canEdit = $map['canEdit'];
        }

        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['configVersion'])) {
            $model->configVersion = $map['configVersion'];
        }

        if (isset($map['defaultExecutor'])) {
            $model->defaultExecutor = defaultExecutor::fromMap($map['defaultExecutor']);
        }

        if (isset($map['defaultModel'])) {
            $model->defaultModel = $map['defaultModel'];
        }

        if (isset($map['defaultResponsibleUserIds'])) {
            if (!empty($map['defaultResponsibleUserIds'])) {
                $model->defaultResponsibleUserIds = [];
                $n1 = 0;
                foreach ($map['defaultResponsibleUserIds'] as $item1) {
                    $model->defaultResponsibleUserIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['effectiveExecutor'])) {
            $model->effectiveExecutor = effectiveExecutor::fromMap($map['effectiveExecutor']);
        }

        if (isset($map['effectiveModel'])) {
            $model->effectiveModel = $map['effectiveModel'];
        }

        if (isset($map['effectiveResponsibleUserIds'])) {
            if (!empty($map['effectiveResponsibleUserIds'])) {
                $model->effectiveResponsibleUserIds = [];
                $n1 = 0;
                foreach ($map['effectiveResponsibleUserIds'] as $item1) {
                    $model->effectiveResponsibleUserIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['nodeId'])) {
            $model->nodeId = $map['nodeId'];
        }

        if (isset($map['overrides'])) {
            $model->overrides = overrides::fromMap($map['overrides']);
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['stateVersion'])) {
            $model->stateVersion = $map['stateVersion'];
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        if (isset($map['updatedBy'])) {
            $model->updatedBy = $map['updatedBy'];
        }

        return $model;
    }
}
