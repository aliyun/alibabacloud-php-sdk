<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\ListFlowTagGroupsResponseBody;

use AlibabaCloud\Tea\Model;

class flowTagGroups extends Model
{
    /**
     * @example 111111111
     *
     * @var string
     */
    public $creatorAccountId;

    /**
     * @example 111
     *
     * @var int
     */
    public $id;

    /**
     * @example 11111111
     *
     * @var string
     */
    public $modiferAccountId;

    /**
     * @example 标签名称
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'creatorAccountId' => 'creatorAccountId',
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
     * @return flowTagGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['creatorAccountId'])) {
            $model->creatorAccountId = $map['creatorAccountId'];
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
