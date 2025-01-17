<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckItemResponseBody\checkItems;

use AlibabaCloud\Dara\Model;

class customConfigs extends Model
{
    /**
     * @var string
     */
    public $defaultValue;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $showName;
    /**
     * @var string
     */
    public $typeDefine;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
