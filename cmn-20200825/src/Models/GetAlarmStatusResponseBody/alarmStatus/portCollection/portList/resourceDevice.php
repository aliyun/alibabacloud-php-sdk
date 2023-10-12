<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\GetAlarmStatusResponseBody\alarmStatus\portCollection\portList;

use AlibabaCloud\Tea\Model;

class resourceDevice extends Model
{
    /**
     * @example 设备名
     *
     * @var string
     */
    public $hostName;

    /**
     * @example 127.0.0.1
     *
     * @var string
     */
    public $ip;

    /**
     * @example HZ
     *
     * @var string
     */
    public $securityDomain;
    protected $_name = [
        'hostName'       => 'HostName',
        'ip'             => 'Ip',
        'securityDomain' => 'SecurityDomain',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostName) {
            $res['HostName'] = $this->hostName;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->securityDomain) {
            $res['SecurityDomain'] = $this->securityDomain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resourceDevice
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HostName'])) {
            $model->hostName = $map['HostName'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['SecurityDomain'])) {
            $model->securityDomain = $map['SecurityDomain'];
        }

        return $model;
    }
}
