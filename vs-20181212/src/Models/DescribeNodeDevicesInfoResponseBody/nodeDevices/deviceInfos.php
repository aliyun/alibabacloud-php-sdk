<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\DescribeNodeDevicesInfoResponseBody\nodeDevices;

use AlibabaCloud\Tea\Model;

class deviceInfos extends Model
{
    /**
     * @var string
     */
    public $IP;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $server;
    protected $_name = [
        'IP'         => 'IP',
        'instanceId' => 'InstanceId',
        'name'       => 'Name',
        'server'     => 'Server',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->IP) {
            $res['IP'] = $this->IP;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->server) {
            $res['Server'] = $this->server;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deviceInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IP'])) {
            $model->IP = $map['IP'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Server'])) {
            $model->server = $map['Server'];
        }

        return $model;
    }
}
