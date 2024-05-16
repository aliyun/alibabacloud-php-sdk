<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableChangeLogResponseBody\data;

use AlibabaCloud\Tea\Model;

class dataEntityList extends Model
{
    /**
     * @description The type of the change.
     *
     * @example "[{\\"action\\":\\"ADD_COLUMN\\",\\"value\\":[{\\"originName\\":\\"\\",\\"originType\\":\\"\\",\\"originComment\\":\\"\\",\\"name\\":\\"id\\",\\"type\\":\\"struct<name:string>\\",\\"comment\\":\\"\\"}]}]",
     *
     * @var string
     */
    public $changeContent;

    /**
     * @example CREATE_TABLE
     *
     * @var string
     */
    public $changeType;

    /**
     * @description The name of the operator.
     *
     * @example 1590722845000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The content of the change.
     *
     * @example 1590722845000
     *
     * @var int
     */
    public $modifiedTime;

    /**
     * @description The time when the metatable was created.
     *
     * @example TABLE
     *
     * @var string
     */
    public $objectType;

    /**
     * @example abc
     *
     * @var string
     */
    public $operator;
    protected $_name = [
        'changeContent' => 'ChangeContent',
        'changeType'    => 'ChangeType',
        'createTime'    => 'CreateTime',
        'modifiedTime'  => 'ModifiedTime',
        'objectType'    => 'ObjectType',
        'operator'      => 'Operator',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->changeContent) {
            $res['ChangeContent'] = $this->changeContent;
        }
        if (null !== $this->changeType) {
            $res['ChangeType'] = $this->changeType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataEntityList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChangeContent'])) {
            $model->changeContent = $map['ChangeContent'];
        }
        if (isset($map['ChangeType'])) {
            $model->changeType = $map['ChangeType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }

        return $model;
    }
}
