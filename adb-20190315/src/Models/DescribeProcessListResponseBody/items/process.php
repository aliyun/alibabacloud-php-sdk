<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeProcessListResponseBody\items;

use AlibabaCloud\Tea\Model;

class process extends Model
{
    /**
     * @var string
     */
    public $command;

    /**
     * @var string
     */
    public $DB;

    /**
     * @var string
     */
    public $host;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $info;

    /**
     * @var string
     */
    public $processId;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var int
     */
    public $time;

    /**
     * @var string
     */
    public $user;
    protected $_name = [
        'command'   => 'Command',
        'DB'        => 'DB',
        'host'      => 'Host',
        'id'        => 'Id',
        'info'      => 'Info',
        'processId' => 'ProcessId',
        'startTime' => 'StartTime',
        'time'      => 'Time',
        'user'      => 'User',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->command) {
            $res['Command'] = $this->command;
        }
        if (null !== $this->DB) {
            $res['DB'] = $this->DB;
        }
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->info) {
            $res['Info'] = $this->info;
        }
        if (null !== $this->processId) {
            $res['ProcessId'] = $this->processId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->user) {
            $res['User'] = $this->user;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return process
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Command'])) {
            $model->command = $map['Command'];
        }
        if (isset($map['DB'])) {
            $model->DB = $map['DB'];
        }
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Info'])) {
            $model->info = $map['Info'];
        }
        if (isset($map['ProcessId'])) {
            $model->processId = $map['ProcessId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['User'])) {
            $model->user = $map['User'];
        }

        return $model;
    }
}
