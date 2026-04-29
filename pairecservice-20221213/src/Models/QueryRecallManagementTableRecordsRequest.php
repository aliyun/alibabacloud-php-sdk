<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;

class QueryRecallManagementTableRecordsRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int[]
     */
    public $primaryKeys;

    /**
     * @var string
     */
    public $recallManagementTableVersionId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'primaryKeys' => 'PrimaryKeys',
        'recallManagementTableVersionId' => 'RecallManagementTableVersionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->primaryKeys) {
            $res['PrimaryKeys'] = $this->primaryKeys;
        }

        if (null !== $this->recallManagementTableVersionId) {
            $res['RecallManagementTableVersionId'] = $this->recallManagementTableVersionId;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['PrimaryKeys'])) {
            $model->primaryKeys = $map['PrimaryKeys'];
        }

        if (isset($map['RecallManagementTableVersionId'])) {
            $model->recallManagementTableVersionId = $map['RecallManagementTableVersionId'];
        }

        return $model;
    }
}
