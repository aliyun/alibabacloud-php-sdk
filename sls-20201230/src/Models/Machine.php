<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class Machine extends Model
{
    /**
     * @var string
     */
    public $hostId;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var int
     */
    public $lastHeartbeatTime;

    /**
     * @var string
     */
    public $machineUniqueid;

    /**
     * @var string
     */
    public $userdefinedId;
    protected $_name = [
        'hostId' => 'host-id',
        'ip' => 'ip',
        'lastHeartbeatTime' => 'lastHeartbeatTime',
        'machineUniqueid' => 'machine-uniqueid',
        'userdefinedId' => 'userdefined-id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hostId) {
            $res['host-id'] = $this->hostId;
        }

        if (null !== $this->ip) {
            $res['ip'] = $this->ip;
        }

        if (null !== $this->lastHeartbeatTime) {
            $res['lastHeartbeatTime'] = $this->lastHeartbeatTime;
        }

        if (null !== $this->machineUniqueid) {
            $res['machine-uniqueid'] = $this->machineUniqueid;
        }

        if (null !== $this->userdefinedId) {
            $res['userdefined-id'] = $this->userdefinedId;
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
        if (isset($map['host-id'])) {
            $model->hostId = $map['host-id'];
        }

        if (isset($map['ip'])) {
            $model->ip = $map['ip'];
        }

        if (isset($map['lastHeartbeatTime'])) {
            $model->lastHeartbeatTime = $map['lastHeartbeatTime'];
        }

        if (isset($map['machine-uniqueid'])) {
            $model->machineUniqueid = $map['machine-uniqueid'];
        }

        if (isset($map['userdefined-id'])) {
            $model->userdefinedId = $map['userdefined-id'];
        }

        return $model;
    }
}
