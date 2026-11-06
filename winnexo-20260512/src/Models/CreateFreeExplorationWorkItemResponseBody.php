<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class CreateFreeExplorationWorkItemResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $agentNames;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $collaborationGroupId;

    /**
     * @var string
     */
    public $conversationId;

    /**
     * @var int
     */
    public $createdByUserId;

    /**
     * @var string
     */
    public $itemType;

    /**
     * @var int[]
     */
    public $memberUserIds;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $visibility;
    protected $_name = [
        'agentNames' => 'agentNames',
        'code' => 'code',
        'collaborationGroupId' => 'collaborationGroupId',
        'conversationId' => 'conversationId',
        'createdByUserId' => 'createdByUserId',
        'itemType' => 'itemType',
        'memberUserIds' => 'memberUserIds',
        'message' => 'message',
        'requestId' => 'requestId',
        'title' => 'title',
        'visibility' => 'visibility',
    ];

    public function validate()
    {
        if (\is_array($this->agentNames)) {
            Model::validateArray($this->agentNames);
        }
        if (\is_array($this->memberUserIds)) {
            Model::validateArray($this->memberUserIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentNames) {
            if (\is_array($this->agentNames)) {
                $res['agentNames'] = [];
                $n1 = 0;
                foreach ($this->agentNames as $item1) {
                    $res['agentNames'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->code) {
            $res['code'] = $this->code;
        }

        if (null !== $this->collaborationGroupId) {
            $res['collaborationGroupId'] = $this->collaborationGroupId;
        }

        if (null !== $this->conversationId) {
            $res['conversationId'] = $this->conversationId;
        }

        if (null !== $this->createdByUserId) {
            $res['createdByUserId'] = $this->createdByUserId;
        }

        if (null !== $this->itemType) {
            $res['itemType'] = $this->itemType;
        }

        if (null !== $this->memberUserIds) {
            if (\is_array($this->memberUserIds)) {
                $res['memberUserIds'] = [];
                $n1 = 0;
                foreach ($this->memberUserIds as $item1) {
                    $res['memberUserIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        if (null !== $this->visibility) {
            $res['visibility'] = $this->visibility;
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
        if (isset($map['agentNames'])) {
            if (!empty($map['agentNames'])) {
                $model->agentNames = [];
                $n1 = 0;
                foreach ($map['agentNames'] as $item1) {
                    $model->agentNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['code'])) {
            $model->code = $map['code'];
        }

        if (isset($map['collaborationGroupId'])) {
            $model->collaborationGroupId = $map['collaborationGroupId'];
        }

        if (isset($map['conversationId'])) {
            $model->conversationId = $map['conversationId'];
        }

        if (isset($map['createdByUserId'])) {
            $model->createdByUserId = $map['createdByUserId'];
        }

        if (isset($map['itemType'])) {
            $model->itemType = $map['itemType'];
        }

        if (isset($map['memberUserIds'])) {
            if (!empty($map['memberUserIds'])) {
                $model->memberUserIds = [];
                $n1 = 0;
                foreach ($map['memberUserIds'] as $item1) {
                    $model->memberUserIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        if (isset($map['visibility'])) {
            $model->visibility = $map['visibility'];
        }

        return $model;
    }
}
