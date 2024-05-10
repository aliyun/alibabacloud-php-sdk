<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Tea\Model;

class CreateTodoTaskShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $tenantContextShrink;

    /**
     * @var string
     */
    public $contentFieldListShrink;

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
     * @var string
     */
    public $detailUrlShrink;

    /**
     * @example 1617675000000
     *
     * @var int
     */
    public $dueTime;

    /**
     * @var string
     */
    public $executorIdsShrink;

    /**
     * @example true
     *
     * @var bool
     */
    public $isOnlyShowExecutor;

    /**
     * @var string
     */
    public $notifyConfigsShrink;

    /**
     * @example 12345
     *
     * @var string
     */
    public $operatorId;

    /**
     * @var string
     */
    public $participantIdsShrink;

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
        'tenantContextShrink'    => 'TenantContext',
        'contentFieldListShrink' => 'contentFieldList',
        'creatorId'              => 'creatorId',
        'description'            => 'description',
        'detailUrlShrink'        => 'detailUrl',
        'dueTime'                => 'dueTime',
        'executorIdsShrink'      => 'executorIds',
        'isOnlyShowExecutor'     => 'isOnlyShowExecutor',
        'notifyConfigsShrink'    => 'notifyConfigs',
        'operatorId'             => 'operatorId',
        'participantIdsShrink'   => 'participantIds',
        'priority'               => 'priority',
        'sourceId'               => 'sourceId',
        'subject'                => 'subject',
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
        if (null !== $this->contentFieldListShrink) {
            $res['contentFieldList'] = $this->contentFieldListShrink;
        }
        if (null !== $this->creatorId) {
            $res['creatorId'] = $this->creatorId;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->detailUrlShrink) {
            $res['detailUrl'] = $this->detailUrlShrink;
        }
        if (null !== $this->dueTime) {
            $res['dueTime'] = $this->dueTime;
        }
        if (null !== $this->executorIdsShrink) {
            $res['executorIds'] = $this->executorIdsShrink;
        }
        if (null !== $this->isOnlyShowExecutor) {
            $res['isOnlyShowExecutor'] = $this->isOnlyShowExecutor;
        }
        if (null !== $this->notifyConfigsShrink) {
            $res['notifyConfigs'] = $this->notifyConfigsShrink;
        }
        if (null !== $this->operatorId) {
            $res['operatorId'] = $this->operatorId;
        }
        if (null !== $this->participantIdsShrink) {
            $res['participantIds'] = $this->participantIdsShrink;
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
     * @return CreateTodoTaskShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TenantContext'])) {
            $model->tenantContextShrink = $map['TenantContext'];
        }
        if (isset($map['contentFieldList'])) {
            $model->contentFieldListShrink = $map['contentFieldList'];
        }
        if (isset($map['creatorId'])) {
            $model->creatorId = $map['creatorId'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['detailUrl'])) {
            $model->detailUrlShrink = $map['detailUrl'];
        }
        if (isset($map['dueTime'])) {
            $model->dueTime = $map['dueTime'];
        }
        if (isset($map['executorIds'])) {
            $model->executorIdsShrink = $map['executorIds'];
        }
        if (isset($map['isOnlyShowExecutor'])) {
            $model->isOnlyShowExecutor = $map['isOnlyShowExecutor'];
        }
        if (isset($map['notifyConfigs'])) {
            $model->notifyConfigsShrink = $map['notifyConfigs'];
        }
        if (isset($map['operatorId'])) {
            $model->operatorId = $map['operatorId'];
        }
        if (isset($map['participantIds'])) {
            $model->participantIdsShrink = $map['participantIds'];
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
