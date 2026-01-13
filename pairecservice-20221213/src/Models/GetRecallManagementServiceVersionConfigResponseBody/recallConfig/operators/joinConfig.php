<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetRecallManagementServiceVersionConfigResponseBody\recallConfig\operators;

use AlibabaCloud\Dara\Model;

class joinConfig extends Model
{
    /**
     * @var string
     */
    public $field;

    /**
     * @var string[]
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
        if (\is_array($this->outputFields)) {
            Model::validateArray($this->outputFields);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->field) {
            $res['Field'] = $this->field;
        }

        if (null !== $this->outputFields) {
            if (\is_array($this->outputFields)) {
                $res['OutputFields'] = [];
                $n1 = 0;
                foreach ($this->outputFields as $item1) {
                    $res['OutputFields'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['OutputFields'])) {
                $model->outputFields = [];
                $n1 = 0;
                foreach ($map['OutputFields'] as $item1) {
                    $model->outputFields[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RecallManagementTableId'])) {
            $model->recallManagementTableId = $map['RecallManagementTableId'];
        }

        return $model;
    }
}
