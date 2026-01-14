<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20230516\Models;

use AlibabaCloud\Dara\Model;

class AgentCallListShrinkRequest extends Model
{
    /**
     * @var int
     */
    public $agentId;

    /**
     * @var string
     */
    public $agentTag;

    /**
     * @var string
     */
    public $callDate;

    /**
     * @var string
     */
    public $endCallDate;

    /**
     * @var string
     */
    public $numberMD5sShrink;

    /**
     * @var string
     */
    public $numbersShrink;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var string
     */
    public $tagsShrink;
    protected $_name = [
        'agentId' => 'AgentId',
        'agentTag' => 'AgentTag',
        'callDate' => 'CallDate',
        'endCallDate' => 'EndCallDate',
        'numberMD5sShrink' => 'NumberMD5s',
        'numbersShrink' => 'Numbers',
        'ownerId' => 'OwnerId',
        'page' => 'Page',
        'pageSize' => 'PageSize',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'tagsShrink' => 'Tags',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }

        if (null !== $this->agentTag) {
            $res['AgentTag'] = $this->agentTag;
        }

        if (null !== $this->callDate) {
            $res['CallDate'] = $this->callDate;
        }

        if (null !== $this->endCallDate) {
            $res['EndCallDate'] = $this->endCallDate;
        }

        if (null !== $this->numberMD5sShrink) {
            $res['NumberMD5s'] = $this->numberMD5sShrink;
        }

        if (null !== $this->numbersShrink) {
            $res['Numbers'] = $this->numbersShrink;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }

        if (isset($map['AgentTag'])) {
            $model->agentTag = $map['AgentTag'];
        }

        if (isset($map['CallDate'])) {
            $model->callDate = $map['CallDate'];
        }

        if (isset($map['EndCallDate'])) {
            $model->endCallDate = $map['EndCallDate'];
        }

        if (isset($map['NumberMD5s'])) {
            $model->numberMD5sShrink = $map['NumberMD5s'];
        }

        if (isset($map['Numbers'])) {
            $model->numbersShrink = $map['Numbers'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
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
