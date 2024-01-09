<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hdr\V20170925\Models\DescribeSitePairStatisticsResponseBody\primarySiteServers;

use AlibabaCloud\Tea\Model;

class server extends Model
{
    /**
     * @example 3.7.3
     *
     * @var string
     */
    public $agentVersion;

    /**
     * @example connected
     *
     * @var string
     */
    public $connectionStatus;

    /**
     * @example 30.42.105.6
     *
     * @var string
     */
    public $ipAddress;

    /**
     * @example sr-000c2rz7q8tkc0g4xgao
     *
     * @var string
     */
    public $serverId;
    protected $_name = [
        'agentVersion'     => 'AgentVersion',
        'connectionStatus' => 'ConnectionStatus',
        'ipAddress'        => 'IpAddress',
        'serverId'         => 'ServerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentVersion) {
            $res['AgentVersion'] = $this->agentVersion;
        }
        if (null !== $this->connectionStatus) {
            $res['ConnectionStatus'] = $this->connectionStatus;
        }
        if (null !== $this->ipAddress) {
            $res['IpAddress'] = $this->ipAddress;
        }
        if (null !== $this->serverId) {
            $res['ServerId'] = $this->serverId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return server
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentVersion'])) {
            $model->agentVersion = $map['AgentVersion'];
        }
        if (isset($map['ConnectionStatus'])) {
            $model->connectionStatus = $map['ConnectionStatus'];
        }
        if (isset($map['IpAddress'])) {
            $model->ipAddress = $map['IpAddress'];
        }
        if (isset($map['ServerId'])) {
            $model->serverId = $map['ServerId'];
        }

        return $model;
    }
}
