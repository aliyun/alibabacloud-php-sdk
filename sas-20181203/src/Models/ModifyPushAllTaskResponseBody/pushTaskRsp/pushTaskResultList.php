<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ModifyPushAllTaskResponseBody\pushTaskRsp;

use AlibabaCloud\Tea\Model;

class pushTaskResultList extends Model
{
    /**
     * @var int
     */
    public $groupId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var string
     */
    public $message;

    /**
     * @var bool
     */
    public $online;

    /**
     * @var string
     */
    public $osVersion;

    /**
     * @var string
     */
    public $region;

    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'groupId'      => 'GroupId',
        'instanceId'   => 'InstanceId',
        'instanceName' => 'InstanceName',
        'ip'           => 'Ip',
        'message'      => 'Message',
        'online'       => 'Online',
        'osVersion'    => 'OsVersion',
        'region'       => 'Region',
        'success'      => 'Success',
        'uuid'         => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->online) {
            $res['Online'] = $this->online;
        }
        if (null !== $this->osVersion) {
            $res['OsVersion'] = $this->osVersion;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pushTaskResultList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Online'])) {
            $model->online = $map['Online'];
        }
        if (isset($map['OsVersion'])) {
            $model->osVersion = $map['OsVersion'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
