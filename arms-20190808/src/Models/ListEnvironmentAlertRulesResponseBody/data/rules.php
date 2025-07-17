<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentAlertRulesResponseBody\data;

use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @description The ID of the alert rule.
     *
     * @example 9502571
     *
     * @var int
     */
    public $alertId;

    /**
     * @description The name of the alert rule.
     *
     * @example mysql-CS-MySQLInnoDBLogWaits_lu
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'alertId' => 'AlertId',
        'name' => 'Name',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertId) {
            $res['AlertId'] = $this->alertId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertId'])) {
            $model->alertId = $map['AlertId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
