<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models;

use AlibabaCloud\Dara\Model;

class CreateFreeExplorationWorkItemRequest extends Model
{
    /**
     * @var string[]
     */
    public $agentNames;

    /**
     * @var string
     */
    public $collaborationGroupId;

    /**
     * @var int[]
     */
    public $memberUserIds;

    /**
     * @var string
     */
    public $tenantId;

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
        'collaborationGroupId' => 'collaborationGroupId',
        'memberUserIds' => 'memberUserIds',
        'tenantId' => 'tenantId',
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

        if (null !== $this->collaborationGroupId) {
            $res['collaborationGroupId'] = $this->collaborationGroupId;
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

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
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

        if (isset($map['collaborationGroupId'])) {
            $model->collaborationGroupId = $map['collaborationGroupId'];
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

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
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
