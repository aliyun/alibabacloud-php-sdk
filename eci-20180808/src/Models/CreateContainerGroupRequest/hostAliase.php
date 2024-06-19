<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest;

use AlibabaCloud\Tea\Model;

class hostAliase extends Model
{
    /**
     * @description The hostnames of the elastic container instance.
     *
     * @example hehe.com
     *
     * @var string[]
     */
    public $hostname;

    /**
     * @description The IP address of the elastic container instance.
     *
     * @example 1.1.1.1
     *
     * @var string
     */
    public $ip;
    protected $_name = [
        'hostname' => 'Hostname',
        'ip'       => 'Ip',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hostAliase
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Hostname'])) {
            if (!empty($map['Hostname'])) {
                $model->hostname = $map['Hostname'];
            }
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }

        return $model;
    }
}
