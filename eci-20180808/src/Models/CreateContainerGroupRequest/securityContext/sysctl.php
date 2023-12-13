<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models\CreateContainerGroupRequest\securityContext;

use AlibabaCloud\Tea\Model;

class sysctl extends Model
{
    /**
     * @description The name of the safe sysctl when you configure a security context to modify sysctls. Valid values:
     *
     *   net.ipv4.ping_group_range
     *   net.ipv4.ip_unprivileged_port_start
     *
     * @example kernel.msgmax
     *
     * @var string
     */
    public $name;

    /**
     * @description The value of the safe sysctl when you configure a security context to modify sysctls.
     *
     * @example 65536
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'name'  => 'Name',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sysctl
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
