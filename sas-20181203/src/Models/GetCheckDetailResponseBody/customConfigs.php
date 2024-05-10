<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetCheckDetailResponseBody;

use AlibabaCloud\Tea\Model;

class customConfigs extends Model
{
    /**
     * @description The default value of the custom configuration item. The value is a string.
     *
     * @example 12
     *
     * @var string
     */
    public $defaultValue;

    /**
     * @description The name of the custom configuration item. The name of a custom configuration item is unique in a check item.
     *
     * @example SessionTimeMax
     *
     * @var string
     */
    public $name;

    /**
     * @description The keyword that identifies the custom configuration item for internationalization.
     *
     * @example Maximum session time
     *
     * @var string
     */
    public $showName;

    /**
     * @description The type of the custom configuration item. The value is a JSON string.
     *
     * @example {\\"type\\":\\"NUMBER\\",\\"range\\":[1,24]}
     *
     * @var string
     */
    public $typeDefine;

    /**
     * @description The value of the custom configuration item. The value is a string.
     *
     * @example 11
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'defaultValue' => 'DefaultValue',
        'name'         => 'Name',
        'showName'     => 'ShowName',
        'typeDefine'   => 'TypeDefine',
        'value'        => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultValue) {
            $res['DefaultValue'] = $this->defaultValue;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->showName) {
            $res['ShowName'] = $this->showName;
        }
        if (null !== $this->typeDefine) {
            $res['TypeDefine'] = $this->typeDefine;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultValue'])) {
            $model->defaultValue = $map['DefaultValue'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ShowName'])) {
            $model->showName = $map['ShowName'];
        }
        if (isset($map['TypeDefine'])) {
            $model->typeDefine = $map['TypeDefine'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
