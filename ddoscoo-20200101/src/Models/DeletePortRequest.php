<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;

class DeletePortRequest extends Model
{
    /**
     * @var string
     */
    public $backendPort;

    /**
     * @var string
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
     * @var string[]
     */
    public $realServers;
    protected $_name = [
        'backendPort' => 'BackendPort',
        'frontendPort' => 'FrontendPort',
        'frontendProtocol' => 'FrontendProtocol',
        'instanceId' => 'InstanceId',
        'realServers' => 'RealServers',
    ];

    public function validate()
    {
        if (\is_array($this->realServers)) {
            Model::validateArray($this->realServers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->realServers) {
            if (\is_array($this->realServers)) {
                $res['RealServers'] = [];
                $n1 = 0;
                foreach ($this->realServers as $item1) {
                    $res['RealServers'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['RealServers'])) {
            if (!empty($map['RealServers'])) {
                $model->realServers = [];
                $n1 = 0;
                foreach ($map['RealServers'] as $item1) {
                    $model->realServers[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
