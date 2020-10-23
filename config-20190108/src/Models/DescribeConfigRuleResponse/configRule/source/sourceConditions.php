<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20190108\Models\DescribeConfigRuleResponse\configRule\source;

use AlibabaCloud\Tea\Model;

class sourceConditions extends Model
{
    /**
     * @var string
     */
    public $desiredValue;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var bool
     */
    public $required;

    /**
     * @var string
     */
    public $selectPath;

    /**
     * @var string
     */
    public $tips;
    protected $_name = [
        'desiredValue' => 'DesiredValue',
        'name'         => 'Name',
        'operator'     => 'Operator',
        'required'     => 'Required',
        'selectPath'   => 'SelectPath',
        'tips'         => 'Tips',
    ];

    public function validate()
    {
        Model::validateRequired('desiredValue', $this->desiredValue, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('operator', $this->operator, true);
        Model::validateRequired('required', $this->required, true);
        Model::validateRequired('selectPath', $this->selectPath, true);
        Model::validateRequired('tips', $this->tips, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desiredValue) {
            $res['DesiredValue'] = $this->desiredValue;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->required) {
            $res['Required'] = $this->required;
        }
        if (null !== $this->selectPath) {
            $res['SelectPath'] = $this->selectPath;
        }
        if (null !== $this->tips) {
            $res['Tips'] = $this->tips;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sourceConditions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DesiredValue'])) {
            $model->desiredValue = $map['DesiredValue'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['Required'])) {
            $model->required = $map['Required'];
        }
        if (isset($map['SelectPath'])) {
            $model->selectPath = $map['SelectPath'];
        }
        if (isset($map['Tips'])) {
            $model->tips = $map['Tips'];
        }

        return $model;
    }
}
