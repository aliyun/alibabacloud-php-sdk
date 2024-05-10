<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateTodoTaskExecutorStatusRequest\executorStatusList;
use AlibabaCloud\SDK\Aliding\V20230426\Models\UpdateTodoTaskExecutorStatusRequest\tenantContext;
use AlibabaCloud\Tea\Model;

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
     * @example xxxx
     *
     * @var string
     */
    public $operatorId;

    /**
     * @description This parameter is required.
     *
     * @example 15002141
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'tenantContext'      => 'TenantContext',
        'executorStatusList' => 'executorStatusList',
        'operatorId'         => 'operatorId',
        'taskId'             => 'taskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toMap() : null;
        }
        if (null !== $this->executorStatusList) {
            $res['executorStatusList'] = [];
            if (null !== $this->executorStatusList && \is_array($this->executorStatusList)) {
                $n = 0;
                foreach ($this->executorStatusList as $item) {
                    $res['executorStatusList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return UpdateTodoTaskExecutorStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }
        if (isset($map['executorStatusList'])) {
            if (!empty($map['executorStatusList'])) {
                $model->executorStatusList = [];
                $n                         = 0;
                foreach ($map['executorStatusList'] as $item) {
                    $model->executorStatusList[$n++] = null !== $item ? executorStatusList::fromMap($item) : $item;
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
