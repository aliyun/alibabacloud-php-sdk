<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\CreateOrUpdateSwimmingLaneRequest\gatewaySwimmingLaneRouteJson;

use AlibabaCloud\Tea\Model;

class conditions extends Model
{
    /**
     * @description The matching condition. Valid values:
     *
     *   PRE: prefix matching
     *   EQUAL: exact matching
     *   ERGULAR: regular expression matching
     *
     * @example PRE
     *
     * @var string
     */
    public $cond;

    /**
     * @description The name of the parameter.
     *
     * @example name
     *
     * @var string
     */
    public $name;

    /**
     * @description The type of the parameter. Valid values:
     *
     *   header
     *   param
     *
     * @example header
     *
     * @var string
     */
    public $type;

    /**
     * @description The value of the parameter.
     *
     * @example xiaoming
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'cond'  => 'Cond',
        'name'  => 'Name',
        'type'  => 'Type',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cond) {
            $res['Cond'] = $this->cond;
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
     * @return conditions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cond'])) {
            $model->cond = $map['Cond'];
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
