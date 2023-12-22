<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetOpaStrategyDetailNewResponseBody\data\alarmDetail\vul;

use AlibabaCloud\Tea\Model;

class riskClass extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'id'   => 'Id',
        'name' => 'Name',
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
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return riskClass
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
