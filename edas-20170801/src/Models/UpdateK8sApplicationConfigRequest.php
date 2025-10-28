<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Dara\Model;

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
    public $cpuRequest;

    /**
     * @var string
     */
    public $ephemeralStorageLimit;

    /**
     * @var string
     */
    public $ephemeralStorageRequest;

    /**
     * @var string
     */
    public $mcpuLimit;

    /**
     * @var string
     */
    public $mcpuRequest;

    /**
     * @var string
     */
    public $memoryLimit;

    /**
     * @var string
     */
    public $memoryRequest;

    /**
     * @var int
     */
    public $timeout;
    protected $_name = [
        'appId' => 'AppId',
        'clusterId' => 'ClusterId',
        'cpuLimit' => 'CpuLimit',
        'cpuRequest' => 'CpuRequest',
        'ephemeralStorageLimit' => 'EphemeralStorageLimit',
        'ephemeralStorageRequest' => 'EphemeralStorageRequest',
        'mcpuLimit' => 'McpuLimit',
        'mcpuRequest' => 'McpuRequest',
        'memoryLimit' => 'MemoryLimit',
        'memoryRequest' => 'MemoryRequest',
        'timeout' => 'Timeout',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->cpuRequest) {
            $res['CpuRequest'] = $this->cpuRequest;
        }

        if (null !== $this->ephemeralStorageLimit) {
            $res['EphemeralStorageLimit'] = $this->ephemeralStorageLimit;
        }

        if (null !== $this->ephemeralStorageRequest) {
            $res['EphemeralStorageRequest'] = $this->ephemeralStorageRequest;
        }

        if (null !== $this->mcpuLimit) {
            $res['McpuLimit'] = $this->mcpuLimit;
        }

        if (null !== $this->mcpuRequest) {
            $res['McpuRequest'] = $this->mcpuRequest;
        }

        if (null !== $this->memoryLimit) {
            $res['MemoryLimit'] = $this->memoryLimit;
        }

        if (null !== $this->memoryRequest) {
            $res['MemoryRequest'] = $this->memoryRequest;
        }

        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['CpuLimit'])) {
            $model->cpuLimit = $map['CpuLimit'];
        }

        if (isset($map['CpuRequest'])) {
            $model->cpuRequest = $map['CpuRequest'];
        }

        if (isset($map['EphemeralStorageLimit'])) {
            $model->ephemeralStorageLimit = $map['EphemeralStorageLimit'];
        }

        if (isset($map['EphemeralStorageRequest'])) {
            $model->ephemeralStorageRequest = $map['EphemeralStorageRequest'];
        }

        if (isset($map['McpuLimit'])) {
            $model->mcpuLimit = $map['McpuLimit'];
        }

        if (isset($map['McpuRequest'])) {
            $model->mcpuRequest = $map['McpuRequest'];
        }

        if (isset($map['MemoryLimit'])) {
            $model->memoryLimit = $map['MemoryLimit'];
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
