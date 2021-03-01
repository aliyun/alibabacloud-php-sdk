<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class UpdateK8sApplicationConfigRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $cpuLimit;

    /**
     * @var string
     */
    public $memoryLimit;

    /**
     * @var string
     */
    public $mcpuLimit;

    /**
     * @var string
     */
    public $cpuRequest;

    /**
     * @var string
     */
    public $mcpuRequest;

    /**
     * @var string
     */
    public $memoryRequest;

    /**
     * @var int
     */
    public $timeout;
    protected $_name = [
        'appId'         => 'AppId',
        'clusterId'     => 'ClusterId',
        'cpuLimit'      => 'CpuLimit',
        'memoryLimit'   => 'MemoryLimit',
        'mcpuLimit'     => 'McpuLimit',
        'cpuRequest'    => 'CpuRequest',
        'mcpuRequest'   => 'McpuRequest',
        'memoryRequest' => 'MemoryRequest',
        'timeout'       => 'Timeout',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->cpuLimit) {
            $res['CpuLimit'] = $this->cpuLimit;
        }
        if (null !== $this->memoryLimit) {
            $res['MemoryLimit'] = $this->memoryLimit;
        }
        if (null !== $this->mcpuLimit) {
            $res['McpuLimit'] = $this->mcpuLimit;
        }
        if (null !== $this->cpuRequest) {
            $res['CpuRequest'] = $this->cpuRequest;
        }
        if (null !== $this->mcpuRequest) {
            $res['McpuRequest'] = $this->mcpuRequest;
        }
        if (null !== $this->memoryRequest) {
            $res['MemoryRequest'] = $this->memoryRequest;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateK8sApplicationConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['CpuLimit'])) {
            $model->cpuLimit = $map['CpuLimit'];
        }
        if (isset($map['MemoryLimit'])) {
            $model->memoryLimit = $map['MemoryLimit'];
        }
        if (isset($map['McpuLimit'])) {
            $model->mcpuLimit = $map['McpuLimit'];
        }
        if (isset($map['CpuRequest'])) {
            $model->cpuRequest = $map['CpuRequest'];
        }
        if (isset($map['McpuRequest'])) {
            $model->mcpuRequest = $map['McpuRequest'];
        }
        if (isset($map['MemoryRequest'])) {
            $model->memoryRequest = $map['MemoryRequest'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        return $model;
    }
}
