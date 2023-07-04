<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20230516\Models;

use AlibabaCloud\Tea\Model;

class AgentRecoverCallShrinkRequest extends Model
{
    /**
     * @description 坐席ID
     *
     * @example 5
     *
     * @var int
     */
    public $agentId;

    /**
     * @description 坐席标签
     *
     * @example abc
     *
     * @var string
     */
    public $agentTag;

    /**
     * @description 查询开始导入时间
     *
     * @example 2020-03-06 10:10:10
     *
     * @var string
     */
    public $beginImportTime;

    /**
     * @description 查询结束导入时间
     *
     * @example 2021-03-06 10:10:10
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
    protected $_name = [
        'agentId'              => 'AgentId',
        'agentTag'             => 'AgentTag',
        'beginImportTime'      => 'BeginImportTime',
        'endImportTime'        => 'EndImportTime',
        'numbersShrink'        => 'Numbers',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'tagsShrink'           => 'Tags',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }
        if (null !== $this->agentTag) {
            $res['AgentTag'] = $this->agentTag;
        }
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AgentRecoverCallShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }
        if (isset($map['AgentTag'])) {
            $model->agentTag = $map['AgentTag'];
        }
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

        return $model;
    }
}
