<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ListScaleOutEcuRequest extends Model
{
    /**
     * @description The ID of the application. Specify this parameter if you want to query the available ECUs in the cluster where the application is deployed.
     *
     * >  Specify at least one of the ClusterId and AppId parameters as the query parameter.
     * @example b93024fd-8a9d-4ef7-99f1-5f0d65cc****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The ID of the cluster. Specify this parameter if you want to query the available ECUs in the cluster.
     *
     * > Specify at least one of the ClusterId and AppId parameters as the query parameter.
     * @example 52984524-6d48-4bbd-******************
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The number of CPU cores based on which you want to query the available ECUs in the cluster.
     *
     * @example 1
     *
     * @var int
     */
    public $cpu;

    /**
     * @description The ID of the instance group. Specify this parameter if you want to query the available ECUs in the cluster where the instance group resides.
     *
     * @example 8123db90-880f-486f-****-****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The number of ECUs that you want to query. If this parameter is not specified, all the ECUs that meet the query conditions are returned.
     *
     * @example 1
     *
     * @var int
     */
    public $instanceNum;

    /**
     * @description The ID of the namespace.
     *
     *   The ID of a custom namespace is in the `region ID:namespace identifier` format. Example: cn-beijing:test.
     *   The ID of the default namespace is in the `region ID` format. Example: cn-beijing.
     *
     * @example cn-beijing:test
     *
     * @var string
     */
    public $logicalRegionId;

    /**
     * @description The size of available memory based on which you want to query the available ECUs in the cluster. Unit: MB.
     *
     * @example 200
     *
     * @var int
     */
    public $mem;
    protected $_name = [
        'appId'           => 'AppId',
        'clusterId'       => 'ClusterId',
        'cpu'             => 'Cpu',
        'groupId'         => 'GroupId',
        'instanceNum'     => 'InstanceNum',
        'logicalRegionId' => 'LogicalRegionId',
        'mem'             => 'Mem',
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
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->instanceNum) {
            $res['InstanceNum'] = $this->instanceNum;
        }
        if (null !== $this->logicalRegionId) {
            $res['LogicalRegionId'] = $this->logicalRegionId;
        }
        if (null !== $this->mem) {
            $res['Mem'] = $this->mem;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListScaleOutEcuRequest
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
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['InstanceNum'])) {
            $model->instanceNum = $map['InstanceNum'];
        }
        if (isset($map['LogicalRegionId'])) {
            $model->logicalRegionId = $map['LogicalRegionId'];
        }
        if (isset($map['Mem'])) {
            $model->mem = $map['Mem'];
        }

        return $model;
    }
}
