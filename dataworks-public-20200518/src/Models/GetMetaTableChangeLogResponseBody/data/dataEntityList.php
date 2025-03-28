<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaTableChangeLogResponseBody\data;

use AlibabaCloud\Dara\Model;

class dataEntityList extends Model
{
    /**
     * @var string
     */
    public $changeContent;

    /**
     * @var string
     */
    public $changeType;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $objectType;

    /**
     * @var string
     */
    public $operator;
    protected $_name = [
        'changeContent' => 'ChangeContent',
        'changeType' => 'ChangeType',
        'createTime' => 'CreateTime',
        'modifiedTime' => 'ModifiedTime',
        'objectType' => 'ObjectType',
        'operator' => 'Operator',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
