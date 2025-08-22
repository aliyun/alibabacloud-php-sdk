<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentAlertRulesResponseBody\data;

use AlibabaCloud\Dara\Model;

class rules extends Model
{
    /**
     * @var int
     */
    public $alertId;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'alertId' => 'AlertId',
        'name' => 'Name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
