<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models;

use AlibabaCloud\Dara\Model;

class DashboardListRequest extends Model
{
    /**
     * @var string
     */
    public $consoleSessionId;

    /**
     * @var string
     */
    public $dashboardName;
    protected $_name = [
        'consoleSessionId' => 'ConsoleSessionId',
        'dashboardName' => 'DashboardName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consoleSessionId) {
            $res['ConsoleSessionId'] = $this->consoleSessionId;
        }

        if (null !== $this->dashboardName) {
            $res['DashboardName'] = $this->dashboardName;
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
        if (isset($map['ConsoleSessionId'])) {
            $model->consoleSessionId = $map['ConsoleSessionId'];
        }

        if (isset($map['DashboardName'])) {
            $model->dashboardName = $map['DashboardName'];
        }

        return $model;
    }
}
