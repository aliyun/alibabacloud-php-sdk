<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20230516\Models;

use AlibabaCloud\Tea\Model;

class TaskRecoverCallShrinkRequest extends Model
{
    /**
     * @description 查询开始导入时间
     *
     * @example "2023-01-09 18:58:19"
     *
     * @var string
     */
    public $beginImportTime;

    /**
     * @description 查询结束导入时间
     *
     * @example "2023-01-09 18:58:19"
     *
     * @var string
     */
    public $endImportTime;

    /**
     * @description 号码列表
     *
     * @var string
     */
    public $numbersShrink;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description 用户自定义标签列表
     *
     * @var string
     */
    public $tagsShrink;

    /**
     * @description 任务ID
     *
     * @example 93
     *
     * @var int
     */
    public $taskId;
    protected $_name = [
        'beginImportTime'      => 'BeginImportTime',
        'endImportTime'        => 'EndImportTime',
        'numbersShrink'        => 'Numbers',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'tagsShrink'           => 'Tags',
        'taskId'               => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginImportTime) {
            $res['BeginImportTime'] = $this->beginImportTime;
        }
        if (null !== $this->endImportTime) {
            $res['EndImportTime'] = $this->endImportTime;
        }
        if (null !== $this->numbersShrink) {
            $res['Numbers'] = $this->numbersShrink;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TaskRecoverCallShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeginImportTime'])) {
            $model->beginImportTime = $map['BeginImportTime'];
        }
        if (isset($map['EndImportTime'])) {
            $model->endImportTime = $map['EndImportTime'];
        }
        if (isset($map['Numbers'])) {
            $model->numbersShrink = $map['Numbers'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Tags'])) {
            $model->tagsShrink = $map['Tags'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
