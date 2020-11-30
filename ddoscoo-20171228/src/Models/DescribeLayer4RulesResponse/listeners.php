<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeLayer4RulesResponse;

use AlibabaCloud\Tea\Model;

class listeners extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var int
     */
    public $frontendPort;

    /**
     * @var int
     */
    public $backendPort;

    /**
     * @var bool
     */
    public $isAutoCreate;

    /**
     * @var string[]
     */
    public $realServers;
    protected $_name = [
        'instanceId'   => 'InstanceId',
        'protocol'     => 'Protocol',
        'frontendPort' => 'FrontendPort',
        'backendPort'  => 'BackendPort',
        'isAutoCreate' => 'IsAutoCreate',
        'realServers'  => 'RealServers',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('protocol', $this->protocol, true);
        Model::validateRequired('frontendPort', $this->frontendPort, true);
        Model::validateRequired('backendPort', $this->backendPort, true);
        Model::validateRequired('isAutoCreate', $this->isAutoCreate, true);
        Model::validateRequired('realServers', $this->realServers, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->frontendPort) {
            $res['FrontendPort'] = $this->frontendPort;
        }
        if (null !== $this->backendPort) {
            $res['BackendPort'] = $this->backendPort;
        }
        if (null !== $this->isAutoCreate) {
            $res['IsAutoCreate'] = $this->isAutoCreate;
        }
        if (null !== $this->realServers) {
            $res['RealServers'] = $this->realServers;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return listeners
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['FrontendPort'])) {
            $model->frontendPort = $map['FrontendPort'];
        }
        if (isset($map['BackendPort'])) {
            $model->backendPort = $map['BackendPort'];
        }
        if (isset($map['IsAutoCreate'])) {
            $model->isAutoCreate = $map['IsAutoCreate'];
        }
        if (isset($map['RealServers'])) {
            if (!empty($map['RealServers'])) {
                $model->realServers = $map['RealServers'];
            }
        }

        return $model;
    }
}
