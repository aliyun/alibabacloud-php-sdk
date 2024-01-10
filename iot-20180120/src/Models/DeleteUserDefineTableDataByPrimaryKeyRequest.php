<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

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
        'conditions'      => 'Conditions',
        'iotInstanceId'   => 'IotInstanceId',
        'tableIdentifier' => 'TableIdentifier',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->conditions) {
            $res['Conditions'] = $this->conditions;
        }
        if (null !== $this->iotInstanceId) {
            $res['IotInstanceId'] = $this->iotInstanceId;
        }
        if (null !== $this->tableIdentifier) {
            $res['TableIdentifier'] = $this->tableIdentifier;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteUserDefineTableDataByPrimaryKeyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Conditions'])) {
            $model->conditions = $map['Conditions'];
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
