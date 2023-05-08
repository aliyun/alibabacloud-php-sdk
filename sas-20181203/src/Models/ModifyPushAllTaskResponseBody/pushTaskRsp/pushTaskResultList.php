<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ModifyPushAllTaskResponseBody\pushTaskRsp;

use AlibabaCloud\Tea\Model;

class pushTaskResultList extends Model
{
    /**
     * @description The region in which the server resides.
     *
     * @example 226
     *
     * @var int
     */
    public $groupId;

    /**
     * @example i-wz9f7wlklxqnvdk****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the server.
     *
     * @example TestInstance
     *
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $ip;

    /**
     * @description ModifyPushAllTask
     *
     * @example successful
     *
     * @var string
     */
    public $message;

    /**
     * @description Performs security check tasks on servers with a few clicks.
     *
     * @example false
     *
     * @var bool
     */
    public $online;

    /**
     * @example linux
     *
     * @var string
     */
    public $osVersion;

    /**
     * @description 1.2.XX.XX
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $region;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example false
     *
     * @var bool
     */
    public $success;

    /**
     * @description Indicates whether the Security Center agent is online. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * >  If the Security Center agent of the server is offline, Security Center does not protect the server.
     * @example 5493fe42-61f5-4627-9aa2-8c449bbe****
     *
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
