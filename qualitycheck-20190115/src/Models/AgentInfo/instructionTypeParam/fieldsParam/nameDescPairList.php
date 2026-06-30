<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\AgentInfo\instructionTypeParam\fieldsParam;

use AlibabaCloud\Dara\Model;

class nameDescPairList extends Model
{
    /**
     * @var string
     */
    public $desc;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'desc' => 'Desc',
        'name' => 'Name',
        'value' => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
