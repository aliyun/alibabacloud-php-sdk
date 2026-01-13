<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\UpdateRecallManagementServiceVersionConfigRequest\recallConfig\operators;

use AlibabaCloud\Dara\Model;

class joinConfig extends Model
{
    /**
     * @var string
     */
    public $field;

    /**
     * @var string
     */
    public $outputFields;

    /**
     * @var string
     */
    public $recallManagementTableId;
    protected $_name = [
        'field' => 'Field',
        'outputFields' => 'OutputFields',
        'recallManagementTableId' => 'RecallManagementTableId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->field) {
            $res['Field'] = $this->field;
        }

        if (null !== $this->outputFields) {
            $res['OutputFields'] = $this->outputFields;
        }

        if (null !== $this->recallManagementTableId) {
            $res['RecallManagementTableId'] = $this->recallManagementTableId;
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
        if (isset($map['Field'])) {
            $model->field = $map['Field'];
        }

        if (isset($map['OutputFields'])) {
            $model->outputFields = $map['OutputFields'];
        }

        if (isset($map['RecallManagementTableId'])) {
            $model->recallManagementTableId = $map['RecallManagementTableId'];
        }

        return $model;
    }
}
