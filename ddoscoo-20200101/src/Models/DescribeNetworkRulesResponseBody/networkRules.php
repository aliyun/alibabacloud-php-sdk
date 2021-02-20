<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeNetworkRulesResponseBody;

use AlibabaCloud\Tea\Model;

class networkRules extends Model
{
    /**
     * @var int
     */
    public $frontendPort;

    /**
     * @var bool
     */
    public $isAutoCreate;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string[]
     */
    public $realServers;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $backendPort;
    protected $_name = [
        'frontendPort' => 'FrontendPort',
        'isAutoCreate' => 'IsAutoCreate',
        'protocol'     => 'Protocol',
        'realServers'  => 'RealServers',
        'instanceId'   => 'InstanceId',
        'backendPort'  => 'BackendPort',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->frontendPort) {
            $res['FrontendPort'] = $this->frontendPort;
        }
        if (null !== $this->isAutoCreate) {
            $res['IsAutoCreate'] = $this->isAutoCreate;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->realServers) {
            $res['RealServers'] = $this->realServers;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->backendPort) {
            $res['BackendPort'] = $this->backendPort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FrontendPort'])) {
            $model->frontendPort = $map['FrontendPort'];
        }
        if (isset($map['IsAutoCreate'])) {
            $model->isAutoCreate = $map['IsAutoCreate'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['RealServers'])) {
            if (!empty($map['RealServers'])) {
                $model->realServers = $map['RealServers'];
            }
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['BackendPort'])) {
            $model->backendPort = $map['BackendPort'];
        }

        return $model;
    }
}
