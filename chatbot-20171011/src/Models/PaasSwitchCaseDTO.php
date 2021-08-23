<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class PaasSwitchCaseDTO extends Model
{
    /**
     * @description Id
     *
     * @var string
     */
    public $id;

    /**
     * @description Label
     *
     * @var string
     */
    public $label;

    /**
     * @description Type
     *
     * @var string
     */
    public $type;

    /**
     * @description Value
     *
     * @var string
     */
    public $value;

    /**
     * @description VariableName
     *
     * @var string
     */
    public $variableName;
    protected $_name = [
        'id'           => 'Id',
        'label'        => 'Label',
        'type'         => 'Type',
        'value'        => 'Value',
        'variableName' => 'VariableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->variableName) {
            $res['VariableName'] = $this->variableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PaasSwitchCaseDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['VariableName'])) {
            $model->variableName = $map['VariableName'];
        }

        return $model;
    }
}
