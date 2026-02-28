<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Dara\Model;

class DeleteUserDefineTableDataByPrimaryKeyRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $conditions;

    /**
     * @var string
     */
    public $iotInstanceId;

    /**
     * @var string
     */
    public $tableIdentifier;
    protected $_name = [
        'conditions' => 'Conditions',
        'iotInstanceId' => 'IotInstanceId',
        'tableIdentifier' => 'TableIdentifier',
    ];

    public function validate()
    {
        if (\is_array($this->conditions)) {
            Model::validateArray($this->conditions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->conditions) {
            if (\is_array($this->conditions)) {
                $res['Conditions'] = [];
                foreach ($this->conditions as $key1 => $value1) {
                    $res['Conditions'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }

        if (null !== $this->tableIdentifier) {
            $res['TableIdentifier'] = $this->tableIdentifier;
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
        if (isset($map['Conditions'])) {
            if (!empty($map['Conditions'])) {
                $model->conditions = [];
                foreach ($map['Conditions'] as $key1 => $value1) {
                    $model->conditions[$key1] = $value1;
                }
            }
        }

        if (isset($map['IotInstanceId'])) {
            $model->iotInstanceId = $map['IotInstanceId'];
        }

        if (isset($map['TableIdentifier'])) {
            $model->tableIdentifier = $map['TableIdentifier'];
        }

        return $model;
    }
}
