<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateTodoTaskRequest\contentFieldList;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateTodoTaskRequest\detailUrl;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateTodoTaskRequest\notifyConfigs;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateTodoTaskRequest\tenantContext;
use AlibabaCloud\Tea\Model;

class CreateTodoTaskRequest extends Model
{
    /**
     * @var tenantContext
     */
    public $tenantContext;

    /**
     * @var contentFieldList[]
     */
    public $contentFieldList;

    /**
     * @example PUoiinWIpa2yH2ymhiiGiP6g
     *
     * @var string
     */
    public $creatorId;

    /**
     * @example 应用可以调用该接口发起一个钉钉待办任务，该待办事项会出现在钉钉客户端“待办”页面，需要注意的是，通过开放接口发起的待办，目前仅支持直接跳转ISV应用详情页（ISV在调该接口时需传入自身应用详情页链接）。
     *
     * @var string
     */
    public $description;

    /**
     * @var detailUrl
     */
    public $detailUrl;

    /**
     * @example 1617675000000
     *
     * @var int
     */
    public $dueTime;

    /**
     * @var string[]
     */
    public $executorIds;

    /**
     * @example true
     *
     * @var bool
     */
    public $isOnlyShowExecutor;

    /**
     * @var notifyConfigs
     */
    public $notifyConfigs;

    /**
     * @example 12345
     *
     * @var string
     */
    public $operatorId;

    /**
     * @var string[]
     */
    public $participantIds;

    /**
     * @example 20
     *
     * @var int
     */
    public $priority;

    /**
     * @example isv_dingtalkTodo1
     *
     * @var string
     */
    public $sourceId;

    /**
     * @description This parameter is required.
     *
     * @example 接入钉钉待办
     *
     * @var string
     */
    public $subject;
    protected $_name = [
        'tenantContext'      => 'TenantContext',
        'contentFieldList'   => 'contentFieldList',
        'creatorId'          => 'creatorId',
        'description'        => 'description',
        'detailUrl'          => 'detailUrl',
        'dueTime'            => 'dueTime',
        'executorIds'        => 'executorIds',
        'isOnlyShowExecutor' => 'isOnlyShowExecutor',
        'notifyConfigs'      => 'notifyConfigs',
        'operatorId'         => 'operatorId',
        'participantIds'     => 'participantIds',
        'priority'           => 'priority',
        'sourceId'           => 'sourceId',
        'subject'            => 'subject',
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
        if (null !== $this->contentFieldList) {
            $res['contentFieldList'] = [];
            if (null !== $this->contentFieldList && \is_array($this->contentFieldList)) {
                $n = 0;
                foreach ($this->contentFieldList as $item) {
                    $res['contentFieldList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->creatorId) {
            $res['creatorId'] = $this->creatorId;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->detailUrl) {
            $res['detailUrl'] = null !== $this->detailUrl ? $this->detailUrl->toMap() : null;
        }
        if (null !== $this->dueTime) {
            $res['dueTime'] = $this->dueTime;
        }
        if (null !== $this->executorIds) {
            $res['executorIds'] = $this->executorIds;
        }
        if (null !== $this->isOnlyShowExecutor) {
            $res['isOnlyShowExecutor'] = $this->isOnlyShowExecutor;
        }
        if (null !== $this->notifyConfigs) {
            $res['notifyConfigs'] = null !== $this->notifyConfigs ? $this->notifyConfigs->toMap() : null;
        }
        if (null !== $this->operatorId) {
            $res['operatorId'] = $this->operatorId;
        }
        if (null !== $this->participantIds) {
            $res['participantIds'] = $this->participantIds;
        }
        if (null !== $this->priority) {
            $res['priority'] = $this->priority;
        }
        if (null !== $this->sourceId) {
            $res['sourceId'] = $this->sourceId;
        }
        if (null !== $this->subject) {
            $res['subject'] = $this->subject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTodoTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }
        if (isset($map['contentFieldList'])) {
            if (!empty($map['contentFieldList'])) {
                $model->contentFieldList = [];
                $n                       = 0;
                foreach ($map['contentFieldList'] as $item) {
                    $model->contentFieldList[$n++] = null !== $item ? contentFieldList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['creatorId'])) {
            $model->creatorId = $map['creatorId'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['detailUrl'])) {
            $model->detailUrl = detailUrl::fromMap($map['detailUrl']);
        }
        if (isset($map['dueTime'])) {
            $model->dueTime = $map['dueTime'];
        }
        if (isset($map['executorIds'])) {
            if (!empty($map['executorIds'])) {
                $model->executorIds = $map['executorIds'];
            }
        }
        if (isset($map['isOnlyShowExecutor'])) {
            $model->isOnlyShowExecutor = $map['isOnlyShowExecutor'];
        }
        if (isset($map['notifyConfigs'])) {
            $model->notifyConfigs = notifyConfigs::fromMap($map['notifyConfigs']);
        }
        if (isset($map['operatorId'])) {
            $model->operatorId = $map['operatorId'];
        }
        if (isset($map['participantIds'])) {
            if (!empty($map['participantIds'])) {
                $model->participantIds = $map['participantIds'];
            }
        }
        if (isset($map['priority'])) {
            $model->priority = $map['priority'];
        }
        if (isset($map['sourceId'])) {
            $model->sourceId = $map['sourceId'];
        }
        if (isset($map['subject'])) {
            $model->subject = $map['subject'];
        }

        return $model;
    }
}
