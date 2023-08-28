<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateTodoTaskResponseBody\contentFieldList;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateTodoTaskResponseBody\detailUrl;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateTodoTaskResponseBody\notifyConfigs;
use AlibabaCloud\Tea\Model;

class CreateTodoTaskResponseBody extends Model
{
    /**
     * @example isv_dingtalkTodo
     *
     * @var string
     */
    public $bizTag;

    /**
     * @var contentFieldList[]
     */
    public $contentFieldList;

    /**
     * @example 1617675200000
     *
     * @var int
     */
    public $createdTime;

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
     * @example false
     *
     * @var bool
     */
    public $done;

    /**
     * @example 1617675100000
     *
     * @var int
     */
    public $dueTime;

    /**
     * @var string[]
     */
    public $executorIds;

    /**
     * @example 1617675200000
     *
     * @var int
     */
    public $finishTime;

    /**
     * @example OPJpwtwPVNGIFKURjrzd
     *
     * @var string
     */
    public $id;

    /**
     * @example true
     *
     * @var bool
     */
    public $isOnlyShowExecutor;

    /**
     * @example 1617675200000
     *
     * @var int
     */
    public $modifiedTime;

    /**
     * @example PUoiinWIpa2yH2ymhiiGiP6g
     *
     * @var string
     */
    public $modifierId;

    /**
     * @var notifyConfigs
     */
    public $notifyConfigs;

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
     * @description requestId
     *
     * @example 0FAAEC9C-C6C8-5C87-AF8E-1195889BBXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @example isv_dingtalkTodo
     *
     * @var string
     */
    public $source;

    /**
     * @example isv_dingtalkTodo1
     *
     * @var string
     */
    public $sourceId;

    /**
     * @example 1617675000000
     *
     * @var int
     */
    public $startTime;

    /**
     * @example 接入钉钉待办
     *
     * @var string
     */
    public $subject;
    protected $_name = [
        'bizTag'             => 'bizTag',
        'contentFieldList'   => 'contentFieldList',
        'createdTime'        => 'createdTime',
        'creatorId'          => 'creatorId',
        'description'        => 'description',
        'detailUrl'          => 'detailUrl',
        'done'               => 'done',
        'dueTime'            => 'dueTime',
        'executorIds'        => 'executorIds',
        'finishTime'         => 'finishTime',
        'id'                 => 'id',
        'isOnlyShowExecutor' => 'isOnlyShowExecutor',
        'modifiedTime'       => 'modifiedTime',
        'modifierId'         => 'modifierId',
        'notifyConfigs'      => 'notifyConfigs',
        'participantIds'     => 'participantIds',
        'priority'           => 'priority',
        'requestId'          => 'requestId',
        'source'             => 'source',
        'sourceId'           => 'sourceId',
        'startTime'          => 'startTime',
        'subject'            => 'subject',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizTag) {
            $res['bizTag'] = $this->bizTag;
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
        if (null !== $this->createdTime) {
            $res['createdTime'] = $this->createdTime;
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
        if (null !== $this->done) {
            $res['done'] = $this->done;
        }
        if (null !== $this->dueTime) {
            $res['dueTime'] = $this->dueTime;
        }
        if (null !== $this->executorIds) {
            $res['executorIds'] = $this->executorIds;
        }
        if (null !== $this->finishTime) {
            $res['finishTime'] = $this->finishTime;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->isOnlyShowExecutor) {
            $res['isOnlyShowExecutor'] = $this->isOnlyShowExecutor;
        }
        if (null !== $this->modifiedTime) {
            $res['modifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->modifierId) {
            $res['modifierId'] = $this->modifierId;
        }
        if (null !== $this->notifyConfigs) {
            $res['notifyConfigs'] = null !== $this->notifyConfigs ? $this->notifyConfigs->toMap() : null;
        }
        if (null !== $this->participantIds) {
            $res['participantIds'] = $this->participantIds;
        }
        if (null !== $this->priority) {
            $res['priority'] = $this->priority;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->source) {
            $res['source'] = $this->source;
        }
        if (null !== $this->sourceId) {
            $res['sourceId'] = $this->sourceId;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }
        if (null !== $this->subject) {
            $res['subject'] = $this->subject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTodoTaskResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['bizTag'])) {
            $model->bizTag = $map['bizTag'];
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
        if (isset($map['createdTime'])) {
            $model->createdTime = $map['createdTime'];
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
        if (isset($map['done'])) {
            $model->done = $map['done'];
        }
        if (isset($map['dueTime'])) {
            $model->dueTime = $map['dueTime'];
        }
        if (isset($map['executorIds'])) {
            if (!empty($map['executorIds'])) {
                $model->executorIds = $map['executorIds'];
            }
        }
        if (isset($map['finishTime'])) {
            $model->finishTime = $map['finishTime'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['isOnlyShowExecutor'])) {
            $model->isOnlyShowExecutor = $map['isOnlyShowExecutor'];
        }
        if (isset($map['modifiedTime'])) {
            $model->modifiedTime = $map['modifiedTime'];
        }
        if (isset($map['modifierId'])) {
            $model->modifierId = $map['modifierId'];
        }
        if (isset($map['notifyConfigs'])) {
            $model->notifyConfigs = notifyConfigs::fromMap($map['notifyConfigs']);
        }
        if (isset($map['participantIds'])) {
            if (!empty($map['participantIds'])) {
                $model->participantIds = $map['participantIds'];
            }
        }
        if (isset($map['priority'])) {
            $model->priority = $map['priority'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['source'])) {
            $model->source = $map['source'];
        }
        if (isset($map['sourceId'])) {
            $model->sourceId = $map['sourceId'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }
        if (isset($map['subject'])) {
            $model->subject = $map['subject'];
        }

        return $model;
    }
}
