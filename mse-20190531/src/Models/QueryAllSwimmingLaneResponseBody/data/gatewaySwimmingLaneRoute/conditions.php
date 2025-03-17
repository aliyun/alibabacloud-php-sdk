<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\QueryAllSwimmingLaneResponseBody\data\gatewaySwimmingLaneRoute;

use AlibabaCloud\Tea\Model;

class conditions extends Model
{
    /**
     * @example PRE
     *
     * @var string
     */
    public $cond;

    /**
     * @example name
     *
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $nameList;

    /**
     * @example header
     *
     * @var string
     */
    public $type;

    /**
     * @example xiaoming
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'cond' => 'Cond',
        'name' => 'Name',
        'nameList' => 'NameList',
        'type' => 'Type',
        'value' => 'Value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cond) {
            $res['Cond'] = $this->cond;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nameList) {
            $res['NameList'] = $this->nameList;
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
        if (isset($map['NameList'])) {
            if (!empty($map['NameList'])) {
                $model->nameList = $map['NameList'];
            }
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
