<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\QueryApplicationStatusResponseBody\appInfo\eccList;

use AlibabaCloud\Tea\Model;

class ecc extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example 3616cdca-4f92-4413-****-************
     *
     * @var string
     */
    public $appId;

    /**
     * @description The status of the application instance. Valid values:
     *
     *   0: AGENT_OFF: indicates that the agent is offline.
     *   1: STOPPED: indicates that the application is stopped.
     *   3: RUNNING_BUT_URL_FAILED: indicates that the health check failed.
     *   7: RUNNING: indicates that the application is running.
     *
     * @example 7
     *
     * @var int
     */
    public $appState;

    /**
     * @description The status of the container.
     *
     * @example “”
     *
     * @var string
     */
    public $containerStatus;

    /**
     * @description The time when the ECC was created. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1573626226691
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The unique ID of the ECC.
     *
     * @example 0cf49a6c-95a8-4aa8-****-************
     *
     * @var string
     */
    public $eccId;

    /**
     * @description The unique ID of the ECU.
     *
     * @example 07bd417a-b863-477d-****-************
     *
     * @var string
     */
    public $ecuId;

    /**
     * @description The ID of the instance group.
     *
     * @example 8123db90-880f-486f-****-************
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The private IP address of the ECU.
     *
     * @example 172.16.*.***
     *
     * @var string
     */
    public $ip;

    /**
     * @description The state of the latest task initiated on the application instance. Valid values:
     *
     *   0: UNKNOWN: indicates that the state of the latest task is unknown.
     *   1: PROCESSING: indicates that the latest task is being processed.
     *   2: SUCCESS: indicates that the latest task is executed.
     *   3: FAILED: indicates that the latest task failed.
     *
     * @example 3
     *
     * @var int
     */
    public $taskState;

    /**
     * @description The time when the ECC was last modified. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1573635952012
     *
     * @var int
     */
    public $updateTime;

    /**
     * @description The ID of the VPC.
     *
     * @example vpc-wz9b246zg************
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'appId'           => 'AppId',
        'appState'        => 'AppState',
        'containerStatus' => 'ContainerStatus',
        'createTime'      => 'CreateTime',
        'eccId'           => 'EccId',
        'ecuId'           => 'EcuId',
        'groupId'         => 'GroupId',
        'ip'              => 'Ip',
        'taskState'       => 'TaskState',
        'updateTime'      => 'UpdateTime',
        'vpcId'           => 'VpcId',
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
        if (null !== $this->appState) {
            $res['AppState'] = $this->appState;
        }
        if (null !== $this->containerStatus) {
            $res['ContainerStatus'] = $this->containerStatus;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->eccId) {
            $res['EccId'] = $this->eccId;
        }
        if (null !== $this->ecuId) {
            $res['EcuId'] = $this->ecuId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->taskState) {
            $res['TaskState'] = $this->taskState;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ecc
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppState'])) {
            $model->appState = $map['AppState'];
        }
        if (isset($map['ContainerStatus'])) {
            $model->containerStatus = $map['ContainerStatus'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EccId'])) {
            $model->eccId = $map['EccId'];
        }
        if (isset($map['EcuId'])) {
            $model->ecuId = $map['EcuId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['TaskState'])) {
            $model->taskState = $map['TaskState'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
