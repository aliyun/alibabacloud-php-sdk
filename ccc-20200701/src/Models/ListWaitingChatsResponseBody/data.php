<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListWaitingChatsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListWaitingChatsResponseBody\data\messages;
use AlibabaCloud\SDK\CCC\V20200701\Models\ListWaitingChatsResponseBody\data\userList;

class data extends Model
{
    /**
     * @var string
     */
    public $accessChannelId;
    /**
     * @var string
     */
    public $accessChannelType;
    /**
     * @var bool
     */
    public $beingAssigned;
    /**
     * @var string
     */
    public $chatConversationId;
    /**
     * @var int
     */
    public $enqueueTime;
    /**
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
        'accessChannelId'    => 'AccessChannelId',
        'accessChannelType'  => 'AccessChannelType',
        'beingAssigned'      => 'BeingAssigned',
        'chatConversationId' => 'ChatConversationId',
        'enqueueTime'        => 'EnqueueTime',
        'jobId'              => 'JobId',
        'messages'           => 'Messages',
        'skillGroupId'       => 'SkillGroupId',
        'userList'           => 'UserList',
    ];

    public function validate()
    {
        if (\is_array($this->messages)) {
            Model::validateArray($this->messages);
        }
        if (\is_array($this->userList)) {
            Model::validateArray($this->userList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->messages)) {
                $res['Messages'] = [];
                $n1              = 0;
                foreach ($this->messages as $item1) {
                    $res['Messages'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
        }

        if (null !== $this->userList) {
            if (\is_array($this->userList)) {
                $res['UserList'] = [];
                $n1              = 0;
                foreach ($this->userList as $item1) {
                    $res['UserList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
                $n1              = 0;
                foreach ($map['Messages'] as $item1) {
                    $model->messages[$n1++] = messages::fromMap($item1);
                }
            }
        }

        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
        }

        if (isset($map['UserList'])) {
            if (!empty($map['UserList'])) {
                $model->userList = [];
                $n1              = 0;
                foreach ($map['UserList'] as $item1) {
                    $model->userList[$n1++] = userList::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
