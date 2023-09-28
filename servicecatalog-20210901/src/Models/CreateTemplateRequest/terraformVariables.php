<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicecatalog\V20210901\Models\CreateTemplateRequest;

use AlibabaCloud\Tea\Model;

class terraformVariables extends Model
{
    /**
     * @description The description of the variable.
     *
     * For more information about the format of variable descriptions, see [Methods and suggestions for Terraform code development](~~322216~~).
     * @example { "Label": { "en": "Instance Type" }, "AllowedValues": \[ "ecs.s6-c1m1.small", "ecs.s6-c1m2.large", "ecs.s6-c1m2.xlarge" ] }
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the variable.
     *
     * @example instance_type
     *
     * @var string
     */
    public $variableName;
    protected $_name = [
        'description'  => 'Description',
        'variableName' => 'VariableName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->variableName) {
            $res['VariableName'] = $this->variableName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return terraformVariables
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['VariableName'])) {
            $model->variableName = $map['VariableName'];
        }

        return $model;
    }
}
