<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hdr\V20170925\Models;

use AlibabaCloud\Tea\Model;

class RegisterServersRequest extends Model
{
    /**
     * @example 9080
     *
     * @var int
     */
    public $agentPort;

    /**
     * @example "[{\"instanceId\":\"i-uf60ngpe9sseu5gsgu45\",\"privateIpAddress\":\"192.168.1.198\",\"osType\":\"linux\",\"osName\":\"CentOS  7.8 64位\",\"cpu\":2,\"memory\":4294967296,\"hostName\":\"hdr-test\"}]"
     *
     * @var string
     */
    public $serverInstancesInfo;

    /**
     * @example s-000cm9ax8sgzwujrzdwt
     *
     * @var string
     */
    public $sitePairId;
    protected $_name = [
        'agentPort'           => 'AgentPort',
        'serverInstancesInfo' => 'ServerInstancesInfo',
        'sitePairId'          => 'SitePairId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->agentPort) {
            $res['AgentPort'] = $this->agentPort;
        }
        if (null !== $this->serverInstancesInfo) {
            $res['ServerInstancesInfo'] = $this->serverInstancesInfo;
        }
        if (null !== $this->sitePairId) {
            $res['SitePairId'] = $this->sitePairId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RegisterServersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AgentPort'])) {
            $model->agentPort = $map['AgentPort'];
        }
        if (isset($map['ServerInstancesInfo'])) {
            $model->serverInstancesInfo = $map['ServerInstancesInfo'];
        }
        if (isset($map['SitePairId'])) {
            $model->sitePairId = $map['SitePairId'];
        }

        return $model;
    }
}
