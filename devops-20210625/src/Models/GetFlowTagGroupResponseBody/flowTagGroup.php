<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetFlowTagGroupResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetFlowTagGroupResponseBody\flowTagGroup\flowTagList;

class flowTagGroup extends Model
{
    /**
     * @var string
     */
    public $creatorAccountId;

    /**
     * @var flowTagList[]
     */
    public $flowTagList;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $modiferAccountId;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'creatorAccountId' => 'creatorAccountId',
        'flowTagList' => 'flowTagList',
        'id' => 'id',
        'modiferAccountId' => 'modiferAccountId',
        'name' => 'name',
    ];

    public function validate()
    {
        if (\is_array($this->flowTagList)) {
            Model::validateArray($this->flowTagList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creatorAccountId) {
            $res['creatorAccountId'] = $this->creatorAccountId;
        }

        if (null !== $this->flowTagList) {
            if (\is_array($this->flowTagList)) {
                $res['flowTagList'] = [];
                $n1 = 0;
                foreach ($this->flowTagList as $item1) {
                    $res['flowTagList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->modiferAccountId) {
            $res['modiferAccountId'] = $this->modiferAccountId;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
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
        if (isset($map['creatorAccountId'])) {
            $model->creatorAccountId = $map['creatorAccountId'];
        }

        if (isset($map['flowTagList'])) {
            if (!empty($map['flowTagList'])) {
                $model->flowTagList = [];
                $n1 = 0;
                foreach ($map['flowTagList'] as $item1) {
                    $model->flowTagList[$n1] = flowTagList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['modiferAccountId'])) {
            $model->modiferAccountId = $map['modiferAccountId'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
