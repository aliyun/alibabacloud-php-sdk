<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models\ValidateEnvironmentTunnelRequest;

use AlibabaCloud\Tea\Model;

class tunnelConfig extends Model
{
    /**
     * @example 43.183.xx.xx
     *
     * @var string
     */
    public $hostname;

    /**
     * @example password
     *
     * @var string
     */
    public $password;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 22
     *
     * @var int
     */
    public $sshPort;

    /**
     * @example root
     *
     * @var string
     */
    public $username;

    /**
     * @example vpc-uf6cj8ytglguhhxxxxxxxx
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'hostname' => 'hostname',
        'password' => 'password',
        'regionId' => 'regionId',
        'sshPort'  => 'sshPort',
        'username' => 'username',
        'vpcId'    => 'vpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostname) {
            $res['hostname'] = $this->hostname;
        }
        if (null !== $this->password) {
            $res['password'] = $this->password;
        }
        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }
        if (null !== $this->sshPort) {
            $res['sshPort'] = $this->sshPort;
        }
        if (null !== $this->username) {
            $res['username'] = $this->username;
        }
        if (null !== $this->vpcId) {
            $res['vpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tunnelConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['hostname'])) {
            $model->hostname = $map['hostname'];
        }
        if (isset($map['password'])) {
            $model->password = $map['password'];
        }
        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }
        if (isset($map['sshPort'])) {
            $model->sshPort = $map['sshPort'];
        }
        if (isset($map['username'])) {
            $model->username = $map['username'];
        }
        if (isset($map['vpcId'])) {
            $model->vpcId = $map['vpcId'];
        }

        return $model;
    }
}
