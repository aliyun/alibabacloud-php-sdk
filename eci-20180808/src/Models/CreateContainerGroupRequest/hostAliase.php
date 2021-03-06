<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest;

use AlibabaCloud\Tea\Model;

class hostAliase extends Model
{
    /**
     * @var string
     */
    public $ip;

    /**
     * @var string[]
     */
    public $hostname;
    protected $_name = [
        'ip'       => 'Ip',
        'hostname' => 'Hostname',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
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
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Hostname'])) {
            if (!empty($map['Hostname'])) {
                $model->hostname = $map['Hostname'];
            }
        }

        return $model;
    }
}
