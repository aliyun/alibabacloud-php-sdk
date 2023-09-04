<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models\GetAccessConfigurationResponseBody;

use AlibabaCloud\Tea\Model;

class accessConfiguration extends Model
{
    /**
     * @description The ID of the access configuration.
     *
     * @example ac-00ccule7tadaijxc****
     *
     * @var string
     */
    public $accessConfigurationId;

    /**
     * @description The name of the access configuration.
     *
     * @example VPC-Admin
     *
     * @var string
     */
    public $accessConfigurationName;

    /**
     * @description The time when the access configuration was created.
     *
     * @example 2021-06-30T09:39:44Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The description of the access configuration.
     *
     * @example This is an access configuration.
     *
     * @var string
     */
    public $description;

    /**
     * @description The initial web page that is displayed after a CloudSSO user accesses an account in your resource directory by using the access configuration.
     *
     * @example https://cloudsso.console.aliyun.com
     *
     * @var string
     */
    public $relayState;

    /**
     * @description The duration of a session in which a CloudSSO user accesses an account in your resource directory by using the access configuration.
     *
     * Unit: seconds.
     * @example 3600
     *
     * @var int
     */
    public $sessionDuration;

    /**
     * @description The status notification.
     *
     * @var string[]
     */
    public $statusNotifications;

    /**
     * @description The time when the information about the access configuration was modified.
     *
     * @example 2021-07-26T03:02:11Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'accessConfigurationId'   => 'AccessConfigurationId',
        'accessConfigurationName' => 'AccessConfigurationName',
        'createTime'              => 'CreateTime',
        'description'             => 'Description',
        'relayState'              => 'RelayState',
        'sessionDuration'         => 'SessionDuration',
        'statusNotifications'     => 'StatusNotifications',
        'updateTime'              => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessConfigurationId) {
            $res['AccessConfigurationId'] = $this->accessConfigurationId;
        }
        if (null !== $this->accessConfigurationName) {
            $res['AccessConfigurationName'] = $this->accessConfigurationName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->relayState) {
            $res['RelayState'] = $this->relayState;
        }
        if (null !== $this->sessionDuration) {
            $res['SessionDuration'] = $this->sessionDuration;
        }
        if (null !== $this->statusNotifications) {
            $res['StatusNotifications'] = $this->statusNotifications;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return accessConfiguration
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessConfigurationId'])) {
            $model->accessConfigurationId = $map['AccessConfigurationId'];
        }
        if (isset($map['AccessConfigurationName'])) {
            $model->accessConfigurationName = $map['AccessConfigurationName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RelayState'])) {
            $model->relayState = $map['RelayState'];
        }
        if (isset($map['SessionDuration'])) {
            $model->sessionDuration = $map['SessionDuration'];
        }
        if (isset($map['StatusNotifications'])) {
            if (!empty($map['StatusNotifications'])) {
                $model->statusNotifications = $map['StatusNotifications'];
            }
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
