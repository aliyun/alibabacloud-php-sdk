<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class BatchOperateWorkItemsRequest extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $collaborationGroupId;

    /**
     * @var string
     */
    public $idempotencyKey;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string[]
     */
    public $workItemIds;
    protected $_name = [
        'action' => 'action',
        'collaborationGroupId' => 'collaborationGroupId',
        'idempotencyKey' => 'idempotencyKey',
        'tenantId' => 'tenantId',
        'workItemIds' => 'workItemIds',
    ];

    public function validate()
    {
        if (\is_array($this->workItemIds)) {
            Model::validateArray($this->workItemIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['action'] = $this->action;
        }

        if (null !== $this->collaborationGroupId) {
            $res['collaborationGroupId'] = $this->collaborationGroupId;
        }

        if (null !== $this->idempotencyKey) {
            $res['idempotencyKey'] = $this->idempotencyKey;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        if (null !== $this->workItemIds) {
            if (\is_array($this->workItemIds)) {
                $res['workItemIds'] = [];
                $n1 = 0;
                foreach ($this->workItemIds as $item1) {
                    $res['workItemIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['action'])) {
            $model->action = $map['action'];
        }

        if (isset($map['collaborationGroupId'])) {
            $model->collaborationGroupId = $map['collaborationGroupId'];
        }

        if (isset($map['idempotencyKey'])) {
            $model->idempotencyKey = $map['idempotencyKey'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        if (isset($map['workItemIds'])) {
            if (!empty($map['workItemIds'])) {
                $model->workItemIds = [];
                $n1 = 0;
                foreach ($map['workItemIds'] as $item1) {
                    $model->workItemIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
