<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\DescribeAddonTemplateResponseBody\addon\servicesSpec;

use AlibabaCloud\Tea\Model;

class inputParams extends Model
{
    /**
     * @description The help information of the parameter.
     *
     * @var string
     */
    public $helpText;

    /**
     * @description The parameter label.
     *
     * @var string
     */
    public $label;

    /**
     * @description The parameter name.
     *
     * This parameter is required.
     * @example MYSQL_HOME
     *
     * @var string
     */
    public $name;

    /**
     * @description The parameter type.
     *
     * This parameter is required.
     * @example String
     *
     * @var string
     */
    public $type;

    /**
     * @description The parameter value.
     *
     * This parameter is required.
     * @example usr/local/mysql
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'helpText' => 'HelpText',
        'label'    => 'Label',
        'name'     => 'Name',
        'type'     => 'Type',
        'value'    => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->helpText) {
            $res['HelpText'] = $this->helpText;
        }
        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return inputParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HelpText'])) {
            $model->helpText = $map['HelpText'];
        }
        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
