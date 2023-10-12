<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class ListConnectionPoliciesRequest extends Model
{
    /**
     * @description 架构迭代uid
     *
     * @example 1e0rlfc3358e8h8f
     *
     * @var string
     */
    public $architectureIterationId;

    /**
     * @description 连接策略名字
     *
     * @example 1e0rlfc3358e8h8f
     *
     * @var string
     */
    public $connectionPolicyId;

    /**
     * @description 下联设备uid
     *
     * @example 1e0rlfc3358e8h8f
     *
     * @var string
     */
    public $downlinkArchitectureDeviceId;

    /**
     * @description 下联模块uid
     *
     * @example 1e0rlfc3358e8h8f
     *
     * @var string
     */
    public $downlinkArchitectureModuleId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @description 上联设备uid
     *
     * @example 1e0rlfc3358e8h8f
     *
     * @var string
     */
    public $uplinkArchitectureDeviceId;

    /**
     * @description 上联模块uid
     *
     * @example 1e0rlfc3358e8h8f
     *
     * @var string
     */
    public $uplinkArchitectureModuleId;
    protected $_name = [
        'architectureIterationId'      => 'ArchitectureIterationId',
        'connectionPolicyId'           => 'ConnectionPolicyId',
        'downlinkArchitectureDeviceId' => 'DownlinkArchitectureDeviceId',
        'downlinkArchitectureModuleId' => 'DownlinkArchitectureModuleId',
        'instanceId'                   => 'InstanceId',
        'maxResults'                   => 'MaxResults',
        'nextToken'                    => 'NextToken',
        'uplinkArchitectureDeviceId'   => 'UplinkArchitectureDeviceId',
        'uplinkArchitectureModuleId'   => 'UplinkArchitectureModuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->architectureIterationId) {
            $res['ArchitectureIterationId'] = $this->architectureIterationId;
        }
        if (null !== $this->connectionPolicyId) {
            $res['ConnectionPolicyId'] = $this->connectionPolicyId;
        }
        if (null !== $this->downlinkArchitectureDeviceId) {
            $res['DownlinkArchitectureDeviceId'] = $this->downlinkArchitectureDeviceId;
        }
        if (null !== $this->downlinkArchitectureModuleId) {
            $res['DownlinkArchitectureModuleId'] = $this->downlinkArchitectureModuleId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->uplinkArchitectureDeviceId) {
            $res['UplinkArchitectureDeviceId'] = $this->uplinkArchitectureDeviceId;
        }
        if (null !== $this->uplinkArchitectureModuleId) {
            $res['UplinkArchitectureModuleId'] = $this->uplinkArchitectureModuleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListConnectionPoliciesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ArchitectureIterationId'])) {
            $model->architectureIterationId = $map['ArchitectureIterationId'];
        }
        if (isset($map['ConnectionPolicyId'])) {
            $model->connectionPolicyId = $map['ConnectionPolicyId'];
        }
        if (isset($map['DownlinkArchitectureDeviceId'])) {
            $model->downlinkArchitectureDeviceId = $map['DownlinkArchitectureDeviceId'];
        }
        if (isset($map['DownlinkArchitectureModuleId'])) {
            $model->downlinkArchitectureModuleId = $map['DownlinkArchitectureModuleId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['UplinkArchitectureDeviceId'])) {
            $model->uplinkArchitectureDeviceId = $map['UplinkArchitectureDeviceId'];
        }
        if (isset($map['UplinkArchitectureModuleId'])) {
            $model->uplinkArchitectureModuleId = $map['UplinkArchitectureModuleId'];
        }

        return $model;
    }
}
