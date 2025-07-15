<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListWaitingChatsResponseBody;

use AlibabaCloud\SDK\CCC\V20200701\Models\ListWaitingChatsResponseBody\data\messages;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListWaitingChatsResponseBody\data\userList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 843073c2-*****-49fb-a616-738ddddfebdc
     *
     * @var string
     */
    public $accessChannelId;

    /**
     * @example Web
     *
     * @var string
     */
    public $accessChannelType;

    /**
     * @example false
     *
     * @var bool
     */
    public $beingAssigned;

    /**
     * @example $23086709$EAUNIT
     *
     * @var string
     */
    public $chatConversationId;

    /**
     * @example 1718868572094
     *
     * @var int
     */
    public $enqueueTime;

    /**
     * @example chat-434537064047960064
     *
     * @var string
     */
    public $jobId;

    /**
     * @var messages[]
     */
    public $messages;

    /**
     * @var string
     */
    public $skillGroupId;

    /**
     * @var userList[]
     */
    public $userList;
    protected $_name = [
        'accessChannelId' => 'AccessChannelId',
        'accessChannelType' => 'AccessChannelType',
        'beingAssigned' => 'BeingAssigned',
        'chatConversationId' => 'ChatConversationId',
        'enqueueTime' => 'EnqueueTime',
        'jobId' => 'JobId',
        'messages' => 'Messages',
        'skillGroupId' => 'SkillGroupId',
        'userList' => 'UserList',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessChannelId) {
            $res['AccessChannelId'] = $this->accessChannelId;
        }
        if (null !== $this->accessChannelType) {
            $res['AccessChannelType'] = $this->accessChannelType;
        }
        if (null !== $this->beingAssigned) {
            $res['BeingAssigned'] = $this->beingAssigned;
        }
        if (null !== $this->chatConversationId) {
            $res['ChatConversationId'] = $this->chatConversationId;
        }
        if (null !== $this->enqueueTime) {
            $res['EnqueueTime'] = $this->enqueueTime;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->messages) {
            $res['Messages'] = [];
            if (null !== $this->messages && \is_array($this->messages)) {
                $n = 0;
                foreach ($this->messages as $item) {
                    $res['Messages'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
        }
        if (null !== $this->userList) {
            $res['UserList'] = [];
            if (null !== $this->userList && \is_array($this->userList)) {
                $n = 0;
                foreach ($this->userList as $item) {
                    $res['UserList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessChannelId'])) {
            $model->accessChannelId = $map['AccessChannelId'];
        }
        if (isset($map['AccessChannelType'])) {
            $model->accessChannelType = $map['AccessChannelType'];
        }
        if (isset($map['BeingAssigned'])) {
            $model->beingAssigned = $map['BeingAssigned'];
        }
        if (isset($map['ChatConversationId'])) {
            $model->chatConversationId = $map['ChatConversationId'];
        }
        if (isset($map['EnqueueTime'])) {
            $model->enqueueTime = $map['EnqueueTime'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Messages'])) {
            if (!empty($map['Messages'])) {
                $model->messages = [];
                $n = 0;
                foreach ($map['Messages'] as $item) {
                    $model->messages[$n++] = null !== $item ? messages::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
        }
        if (isset($map['UserList'])) {
            if (!empty($map['UserList'])) {
                $model->userList = [];
                $n = 0;
                foreach ($map['UserList'] as $item) {
                    $model->userList[$n++] = null !== $item ? userList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
