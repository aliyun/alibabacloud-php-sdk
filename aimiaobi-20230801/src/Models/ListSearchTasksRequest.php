<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models;

use AlibabaCloud\Dara\Model;

class ListSearchTasksRequest extends Model
{
    /**
     * @var int[]
     */
    public $dialogueTypes;
    /**
     * @var int
     */
    public $pageNumber;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'dialogueTypes' => 'DialogueTypes',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'workspaceId'   => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->dialogueTypes)) {
            Model::validateArray($this->dialogueTypes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dialogueTypes) {
            if (\is_array($this->dialogueTypes)) {
                $res['DialogueTypes'] = [];
                $n1                   = 0;
                foreach ($this->dialogueTypes as $item1) {
                    $res['DialogueTypes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['DialogueTypes'])) {
            if (!empty($map['DialogueTypes'])) {
                $model->dialogueTypes = [];
                $n1                   = 0;
                foreach ($map['DialogueTypes'] as $item1) {
                    $model->dialogueTypes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
