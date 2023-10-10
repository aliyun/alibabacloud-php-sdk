<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class UpdateK8sApplicationConfigRequest extends Model
{
    /**
     * @description The ID of the application. You can query the application ID by calling the ListApplication operation. For more information, see [ListApplication](~~423162~~).
     *
     * @example 23bf94d9-****-4994-9917-616a827aa777
     *
     * @var string
     */
    public $appId;

    /**
     * @description The ID of the cluster. You can query the cluster ID by calling the ListCluster operation. For more information, see [ListCluster](~~411844~~).
     *
     * @example 9c28bbb9-****-44b3-b953-54ef8a2d0be2
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The maximum number of CPU cores allowed for each application instance when the application is running. The value 0 indicates that no limit is set on CPU cores.
     *
     * @example 1
     *
     * @var string
     */
    public $cpuLimit;

    /**
     * @description The number of CPU cores requested for each application instance when the application is running. Unit: cores. We recommend that you set this parameter. The value 0 indicates that no limit is set on CPU cores.
     *
     * > You must set this parameter together with the CpuLimit parameter. Make sure that the value of this parameter does not exceed that of the CpuLimit parameter.
     * @example 1
     *
     * @var string
     */
    public $cpuRequest;

    /**
     * @description The maximum size of space required by ephemeral storage. Unit: GB. The value 0 indicates that no limit is set on the ephemeral storage space.
     *
     * @example 4
     *
     * @var string
     */
    public $ephemeralStorageLimit;

    /**
     * @description The minimum size of space required by ephemeral storage. Unit: GB. The value 0 indicates that no limit is set on the ephemeral storage space.
     *
     * > You must set this parameter together with the EphemeralStorageLimit parameter. Make sure that the value of this parameter does not exceed that of the EphemeralStorageLimit parameter.
     * @example 2
     *
     * @var string
     */
    public $ephemeralStorageRequest;

    /**
     * @description The maximum number of CPU cores allowed. The value 0 indicates that no limit is set on CPU cores.
     *
     * @example 1
     *
     * @var string
     */
    public $mcpuLimit;

    /**
     * @description The minimum number of CPU cores required. Unit: cores. The value 0 indicates that no limit is set on CPU cores.
     *
     * > You must set this parameter together with the CpuLimit parameter. Make sure that the value of this parameter does not exceed that of the CpuLimit parameter.
     * @example 1000
     *
     * @var string
     */
    public $mcpuRequest;

    /**
     * @description The maximum size of memory allowed for each application instance when the application is running. Unit: MB. The value 0 indicates that no limit is set on the memory size.
     *
     * @example 4
     *
     * @var string
     */
    public $memoryLimit;

    /**
     * @description The size of memory requested for each application instance when the application is running. Unit: MB. We recommend that you set this parameter. If you do not want to apply for a memory quota, set this parameter to 0.
     *
     * > You must set this parameter together with the MemoryLimit parameter. Make sure that the value of this parameter does not exceed that of the MemoryLimit parameter.
     * @example 400
     *
     * @var string
     */
    public $memoryRequest;

    /**
     * @description The timeout period of the change process. Valid values: 1 to 1800. Default value: 600. Unit: seconds.
     *
     * @example 60
     *
     * @var int
     */
    public $timeout;
    protected $_name = [
        'appId'                   => 'AppId',
        'clusterId'               => 'ClusterId',
        'cpuLimit'                => 'CpuLimit',
        'cpuRequest'              => 'CpuRequest',
        'ephemeralStorageLimit'   => 'EphemeralStorageLimit',
        'ephemeralStorageRequest' => 'EphemeralStorageRequest',
        'mcpuLimit'               => 'McpuLimit',
        'mcpuRequest'             => 'McpuRequest',
        'memoryLimit'             => 'MemoryLimit',
        'memoryRequest'           => 'MemoryRequest',
        'timeout'                 => 'Timeout',
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
