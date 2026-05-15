<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;

class ExportRecallManagementTableRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $maxcomputeProjectName;

    /**
     * @var string
     */
    public $maxcomputeSchema;

    /**
     * @var string
     */
    public $maxcomputeTableName;

    /**
     * @var string[]
     */
    public $partitions;

    /**
     * @var string
     */
    public $recallManagementTableVersionId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'maxcomputeProjectName' => 'MaxcomputeProjectName',
        'maxcomputeSchema' => 'MaxcomputeSchema',
        'maxcomputeTableName' => 'MaxcomputeTableName',
        'partitions' => 'Partitions',
        'recallManagementTableVersionId' => 'RecallManagementTableVersionId',
    ];

    public function validate()
    {
        if (\is_array($this->partitions)) {
            Model::validateArray($this->partitions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->maxcomputeProjectName) {
            $res['MaxcomputeProjectName'] = $this->maxcomputeProjectName;
        }

        if (null !== $this->maxcomputeSchema) {
            $res['MaxcomputeSchema'] = $this->maxcomputeSchema;
        }

        if (null !== $this->maxcomputeTableName) {
            $res['MaxcomputeTableName'] = $this->maxcomputeTableName;
        }

        if (null !== $this->partitions) {
            if (\is_array($this->partitions)) {
                $res['Partitions'] = [];
                foreach ($this->partitions as $key1 => $value1) {
                    $res['Partitions'][$key1] = $value1;
                }
            }
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

        if (isset($map['MaxcomputeProjectName'])) {
            $model->maxcomputeProjectName = $map['MaxcomputeProjectName'];
        }

        if (isset($map['MaxcomputeSchema'])) {
            $model->maxcomputeSchema = $map['MaxcomputeSchema'];
        }

        if (isset($map['MaxcomputeTableName'])) {
            $model->maxcomputeTableName = $map['MaxcomputeTableName'];
        }

        if (isset($map['Partitions'])) {
            if (!empty($map['Partitions'])) {
                $model->partitions = [];
                foreach ($map['Partitions'] as $key1 => $value1) {
                    $model->partitions[$key1] = $value1;
                }
            }
        }

        if (isset($map['RecallManagementTableVersionId'])) {
            $model->recallManagementTableVersionId = $map['RecallManagementTableVersionId'];
        }

        return $model;
    }
}
