<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\QueryApplicationStatusResponseBody\appInfo\eccList;

use AlibabaCloud\Tea\Model;

class ecc extends Model
{
    /**
     * @var string
     */
    public $eccId;

    /**
     * @var string
     */
    public $ecuId;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var int
     */
    public $appState;

    /**
     * @var int
     */
    public $taskState;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $containerStatus;
    protected $_name = [
        'eccId'           => 'EccId',
        'ecuId'           => 'EcuId',
        'appId'           => 'AppId',
        'appState'        => 'AppState',
        'taskState'       => 'TaskState',
        'createTime'      => 'CreateTime',
        'updateTime'      => 'UpdateTime',
        'ip'              => 'Ip',
        'vpcId'           => 'VpcId',
        'groupId'         => 'GroupId',
        'containerStatus' => 'ContainerStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eccId) {
            $res['EccId'] = $this->eccId;
        }
        if (null !== $this->ecuId) {
            $res['EcuId'] = $this->ecuId;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appState) {
            $res['AppState'] = $this->appState;
        }
        if (null !== $this->taskState) {
            $res['TaskState'] = $this->taskState;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->containerStatus) {
            $res['ContainerStatus'] = $this->containerStatus;
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
        if (isset($map['EccId'])) {
            $model->eccId = $map['EccId'];
        }
        if (isset($map['EcuId'])) {
            $model->ecuId = $map['EcuId'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppState'])) {
            $model->appState = $map['AppState'];
        }
        if (isset($map['TaskState'])) {
            $model->taskState = $map['TaskState'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['ContainerStatus'])) {
            $model->containerStatus = $map['ContainerStatus'];
        }

        return $model;
    }
}
