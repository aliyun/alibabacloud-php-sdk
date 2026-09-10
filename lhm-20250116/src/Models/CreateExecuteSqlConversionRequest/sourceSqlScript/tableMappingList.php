<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LHM\V20250116\Models\CreateExecuteSqlConversionRequest\sourceSqlScript;

use AlibabaCloud\Dara\Model;

class tableMappingList extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $sourceSchema;

    /**
     * @var string
     */
    public $sourceTableName;

    /**
     * @var string
     */
    public $targetTableName;

    /**
     * @var string
     */
    public $targetType;

    /**
     * @var int
     */
    public $taskId;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $uid;
    protected $_name = [
        'id' => 'id',
        'sourceSchema' => 'sourceSchema',
        'sourceTableName' => 'sourceTableName',
        'targetTableName' => 'targetTableName',
        'targetType' => 'targetType',
        'taskId' => 'taskId',
        'tenantId' => 'tenantId',
        'uid' => 'uid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->sourceSchema) {
            $res['sourceSchema'] = $this->sourceSchema;
        }

        if (null !== $this->sourceTableName) {
            $res['sourceTableName'] = $this->sourceTableName;
        }

        if (null !== $this->targetTableName) {
            $res['targetTableName'] = $this->targetTableName;
        }

        if (null !== $this->targetType) {
            $res['targetType'] = $this->targetType;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        if (null !== $this->tenantId) {
            $res['tenantId'] = $this->tenantId;
        }

        if (null !== $this->uid) {
            $res['uid'] = $this->uid;
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
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['sourceSchema'])) {
            $model->sourceSchema = $map['sourceSchema'];
        }

        if (isset($map['sourceTableName'])) {
            $model->sourceTableName = $map['sourceTableName'];
        }

        if (isset($map['targetTableName'])) {
            $model->targetTableName = $map['targetTableName'];
        }

        if (isset($map['targetType'])) {
            $model->targetType = $map['targetType'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        if (isset($map['tenantId'])) {
            $model->tenantId = $map['tenantId'];
        }

        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }

        return $model;
    }
}
