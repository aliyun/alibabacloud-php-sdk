<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class UpdateTodoTaskExecutorStatusShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $tenantContextShrink;

    /**
     * @var string
     */
    public $executorStatusListShrink;

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
        'tenantContextShrink'      => 'TenantContext',
        'executorStatusListShrink' => 'executorStatusList',
        'operatorId'               => 'operatorId',
        'taskId'                   => 'taskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tenantContextShrink) {
            $res['TenantContext'] = $this->tenantContextShrink;
        }
        if (null !== $this->executorStatusListShrink) {
            $res['executorStatusList'] = $this->executorStatusListShrink;
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
     * @return UpdateTodoTaskExecutorStatusShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }
        if (isset($map['executorStatusList'])) {
            $model->executorStatusListShrink = $map['executorStatusList'];
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
