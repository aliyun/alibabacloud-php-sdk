<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetFlowTagGroupResponseBody\flowTagGroup;

use AlibabaCloud\Tea\Model;

class flowTagList extends Model
{
    /**
     * @example #1F9AEF
     *
     * @var string
     */
    public $color;

    /**
     * @example 1111111111111
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
     * @example 1111111111111
     *
     * @var string
     */
    public $modiferAccountId;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'color'            => 'color',
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
        if (null !== $this->color) {
            $res['color'] = $this->color;
        }
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
     * @return flowTagList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['color'])) {
            $model->color = $map['color'];
        }
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
