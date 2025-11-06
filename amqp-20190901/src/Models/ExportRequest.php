<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models;

use AlibabaCloud\Dara\Model;

class ExportRequest extends Model
{
    /**
     * @var string
     */
    public $consoleSessionId;

    /**
     * @var int
     */
    public $exportType;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $vhostName;
    protected $_name = [
        'consoleSessionId' => 'ConsoleSessionId',
        'exportType' => 'ExportType',
        'instanceId' => 'InstanceId',
        'vhostName' => 'VhostName',
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

        if (null !== $this->exportType) {
            $res['ExportType'] = $this->exportType;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->vhostName) {
            $res['VhostName'] = $this->vhostName;
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

        if (isset($map['ExportType'])) {
            $model->exportType = $map['ExportType'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['VhostName'])) {
            $model->vhostName = $map['VhostName'];
        }

        return $model;
    }
}
