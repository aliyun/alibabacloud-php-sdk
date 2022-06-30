<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribePortResponseBody;

use AlibabaCloud\Tea\Model;

class networkRules extends Model
{
    /**
     * @var int
     */
    public $backendPort;

    /**
     * @var int
     */
    public $frontendPort;

    /**
     * @var string
     */
    public $frontendProtocol;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $isAutoCreate;

    /**
     * @var string[]
     */
    public $realServers;
    protected $_name = [
        'backendPort'      => 'BackendPort',
        'frontendPort'     => 'FrontendPort',
        'frontendProtocol' => 'FrontendProtocol',
        'instanceId'       => 'InstanceId',
        'isAutoCreate'     => 'IsAutoCreate',
        'realServers'      => 'RealServers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backendPort) {
            $res['BackendPort'] = $this->backendPort;
        }
        if (null !== $this->frontendPort) {
            $res['FrontendPort'] = $this->frontendPort;
        }
        if (null !== $this->frontendProtocol) {
            $res['FrontendProtocol'] = $this->frontendProtocol;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
     * @return networkRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackendPort'])) {
            $model->backendPort = $map['BackendPort'];
        }
        if (isset($map['FrontendPort'])) {
            $model->frontendPort = $map['FrontendPort'];
        }
        if (isset($map['FrontendProtocol'])) {
            $model->frontendProtocol = $map['FrontendProtocol'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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
