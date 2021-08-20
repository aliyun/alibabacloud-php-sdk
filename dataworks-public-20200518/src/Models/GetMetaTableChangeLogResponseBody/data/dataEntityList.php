<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableChangeLogResponseBody\data;

use AlibabaCloud\Tea\Model;

class dataEntityList extends Model
{
    /**
     * @var string
     */
    public $objectType;

    /**
     * @var int
     */
    public $modifiedTime;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $changeContent;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var string
     */
    public $changeType;
    protected $_name = [
        'objectType'    => 'ObjectType',
        'modifiedTime'  => 'ModifiedTime',
        'createTime'    => 'CreateTime',
        'changeContent' => 'ChangeContent',
        'operator'      => 'Operator',
        'changeType'    => 'ChangeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->objectType) {
            $res['ObjectType'] = $this->objectType;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->changeContent) {
            $res['ChangeContent'] = $this->changeContent;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->changeType) {
            $res['ChangeType'] = $this->changeType;
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
        if (isset($map['ObjectType'])) {
            $model->objectType = $map['ObjectType'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ChangeContent'])) {
            $model->changeContent = $map['ChangeContent'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['ChangeType'])) {
            $model->changeType = $map['ChangeType'];
        }

        return $model;
    }
}
