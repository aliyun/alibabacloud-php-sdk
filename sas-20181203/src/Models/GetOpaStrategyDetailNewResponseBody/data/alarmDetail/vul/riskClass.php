<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetOpaStrategyDetailNewResponseBody\data\alarmDetail\vul;

use AlibabaCloud\Tea\Model;

class riskClass extends Model
{
    /**
     * @description The ID of the vulnerability types. Valid values:
     *
     *   **cve**: system vulnerability
     *   **app**: application vulnerability
     *
     * @example cve
     *
     * @var string
     */
    public $id;

    /**
     * @description The name of the vulnerability. Valid values:
     *
     *   **system vulnerability**
     *   **application vulnerability**
     *
     * @example system vulnerability
     *
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
