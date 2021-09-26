<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddi\V20200617\Models;

use AlibabaCloud\Tea\Model;

class ModifyFlowProjectClusterSettingRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $defaultUser;

    /**
     * @var string
     */
    public $defaultQueue;

    /**
     * @var string[]
     */
    public $userList;

    /**
     * @var string[]
     */
    public $queueList;

    /**
     * @var string[]
     */
    public $hostList;
    protected $_name = [
        'regionId'     => 'RegionId',
        'projectId'    => 'ProjectId',
        'clusterId'    => 'ClusterId',
        'defaultUser'  => 'DefaultUser',
        'defaultQueue' => 'DefaultQueue',
        'userList'     => 'UserList',
        'queueList'    => 'QueueList',
        'hostList'     => 'HostList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->defaultUser) {
            $res['DefaultUser'] = $this->defaultUser;
        }
        if (null !== $this->defaultQueue) {
            $res['DefaultQueue'] = $this->defaultQueue;
        }
        if (null !== $this->userList) {
            $res['UserList'] = $this->userList;
        }
        if (null !== $this->queueList) {
            $res['QueueList'] = $this->queueList;
        }
        if (null !== $this->hostList) {
            $res['HostList'] = $this->hostList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyFlowProjectClusterSettingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DefaultUser'])) {
            $model->defaultUser = $map['DefaultUser'];
        }
        if (isset($map['DefaultQueue'])) {
            $model->defaultQueue = $map['DefaultQueue'];
        }
        if (isset($map['UserList'])) {
            if (!empty($map['UserList'])) {
                $model->userList = $map['UserList'];
            }
        }
        if (isset($map['QueueList'])) {
            if (!empty($map['QueueList'])) {
                $model->queueList = $map['QueueList'];
            }
        }
        if (isset($map['HostList'])) {
            if (!empty($map['HostList'])) {
                $model->hostList = $map['HostList'];
            }
        }

        return $model;
    }
}
