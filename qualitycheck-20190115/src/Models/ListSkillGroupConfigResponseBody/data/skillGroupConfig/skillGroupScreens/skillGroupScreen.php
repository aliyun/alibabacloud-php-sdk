<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSkillGroupConfigResponseBody\data\skillGroupConfig\skillGroupScreens;

use AlibabaCloud\Tea\Model;

class skillGroupScreen extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $dataType;

    /**
     * @example customerName
     *
     * @var string
     */
    public $name;

    /**
     * @example 1
     *
     * @var int
     */
    public $symbol;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'dataType' => 'DataType',
        'name'     => 'Name',
        'symbol'   => 'Symbol',
        'value'    => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->symbol) {
            $res['Symbol'] = $this->symbol;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return skillGroupScreen
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Symbol'])) {
            $model->symbol = $map['Symbol'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
