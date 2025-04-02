<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateTodoTaskExecutorStatusRequest\executorStatusList;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateTodoTaskExecutorStatusRequest\tenantContext;

class UpdateTodoTaskExecutorStatusRequest extends Model
{
    /**
     * @var tenantContext
     */
    public $tenantContext;

    /**
     * @var executorStatusList[]
     */
    public $executorStatusList;

    /**
     * @var string
     */
    public $operatorId;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'tenantContext' => 'TenantContext',
        'executorStatusList' => 'executorStatusList',
        'operatorId' => 'operatorId',
        'taskId' => 'taskId',
    ];

    public function validate()
    {
        if (null !== $this->tenantContext) {
            $this->tenantContext->validate();
        }
        if (\is_array($this->executorStatusList)) {
            Model::validateArray($this->executorStatusList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toArray($noStream) : $this->tenantContext;
        }

        if (null !== $this->executorStatusList) {
            if (\is_array($this->executorStatusList)) {
                $res['executorStatusList'] = [];
                $n1 = 0;
                foreach ($this->executorStatusList as $item1) {
                    $res['executorStatusList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->operatorId) {
            $res['operatorId'] = $this->operatorId;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
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
        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        if (isset($map['executorStatusList'])) {
            if (!empty($map['executorStatusList'])) {
                $model->executorStatusList = [];
                $n1 = 0;
                foreach ($map['executorStatusList'] as $item1) {
                    $model->executorStatusList[$n1++] = executorStatusList::fromMap($item1);
                }
            }
        }

        if (isset($map['operatorId'])) {
            $model->operatorId = $map['operatorId'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        return $model;
    }
}
