<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayActionsResponseBody\actions;

use AlibabaCloud\Tea\Model;

class action extends Model
{
    /**
     * @var string
     */
    public $adLdap;

    /**
     * @var string
     */
    public $cache;

    /**
     * @var string
     */
    public $disk;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $monitor;

    /**
     * @var string
     */
    public $self;

    /**
     * @var string
     */
    public $smbUser;

    /**
     * @var string
     */
    public $target;
    protected $_name = [
        'adLdap'    => 'AdLdap',
        'cache'     => 'Cache',
        'disk'      => 'Disk',
        'gatewayId' => 'GatewayId',
        'monitor'   => 'Monitor',
        'self'      => 'Self',
        'smbUser'   => 'SmbUser',
        'target'    => 'Target',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adLdap) {
            $res['AdLdap'] = $this->adLdap;
        }
        if (null !== $this->cache) {
            $res['Cache'] = $this->cache;
        }
        if (null !== $this->disk) {
            $res['Disk'] = $this->disk;
        }
        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }
        if (null !== $this->monitor) {
            $res['Monitor'] = $this->monitor;
        }
        if (null !== $this->self) {
            $res['Self'] = $this->self;
        }
        if (null !== $this->smbUser) {
            $res['SmbUser'] = $this->smbUser;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return action
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdLdap'])) {
            $model->adLdap = $map['AdLdap'];
        }
        if (isset($map['Cache'])) {
            $model->cache = $map['Cache'];
        }
        if (isset($map['Disk'])) {
            $model->disk = $map['Disk'];
        }
        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }
        if (isset($map['Monitor'])) {
            $model->monitor = $map['Monitor'];
        }
        if (isset($map['Self'])) {
            $model->self = $map['Self'];
        }
        if (isset($map['SmbUser'])) {
            $model->smbUser = $map['SmbUser'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }

        return $model;
    }
}
