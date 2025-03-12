<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ModifyPushAllTaskResponseBody\pushTaskRsp;

use AlibabaCloud\Tea\Model;

class pushTaskResultList extends Model
{
    /**
     * @description The ID of the server group to which the server belongs.
     *
     * @example 226
     *
     * @var int
     */
    public $groupId;

    /**
     * @description The ID of the server.
     *
     * @example i-wz9f7wlklxqnvdk****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the server.
     *
     * @example TestInstance
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The IP address of the server.
     *
     * @example 127.XX.XX
     *
     * @var string
     */
    public $ip;

    /**
     * @description The message that describes the security check failure.
     *
     * @example successful
     *
     * @var string
     */
    public $message;

    /**
     * @description Indicates whether the Security Center agent is online. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * >  If the Security Center agent of the server is offline, Security Center does not protect the server.
     * @example false
     *
     * @var bool
     */
    public $online;

    /**
     * @description The operating system version of the server.
     *
     * @example linux
     *
     * @var string
     */
    public $osVersion;

    /**
     * @description The region in which the server resides.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $region;

    /**
     * @description Indicates whether the security check task is successful. Valid values:
     *
     *   **true**: yes
     *   **false**: no
     *
     * @example false
     *
     * @var bool
     */
    public $success;

    /**
     * @description The UUID of the server.
     *
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
