<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetFlowTagGroupResponseBody;

use AlibabaCloud\SDK\Devops\V20210625\Models\GetFlowTagGroupResponseBody\flowTagGroup\flowTagList;
use AlibabaCloud\Tea\Model;

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
        'flowTagList'      => 'flowTagList',
        'id'               => 'id',
        'modiferAccountId' => 'modiferAccountId',
        'name'             => 'name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creatorAccountId) {
            $res['creatorAccountId'] = $this->creatorAccountId;
        }
        if (null !== $this->flowTagList) {
            $res['flowTagList'] = [];
            if (null !== $this->flowTagList && \is_array($this->flowTagList)) {
                $n = 0;
                foreach ($this->flowTagList as $item) {
                    $res['flowTagList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return flowTagGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['creatorAccountId'])) {
            $model->creatorAccountId = $map['creatorAccountId'];
        }
        if (isset($map['flowTagList'])) {
            if (!empty($map['flowTagList'])) {
                $model->flowTagList = [];
                $n                  = 0;
                foreach ($map['flowTagList'] as $item) {
                    $model->flowTagList[$n++] = null !== $item ? flowTagList::fromMap($item) : $item;
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
