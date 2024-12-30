<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\CreateApsDatasoureRequest;

use AlibabaCloud\Tea\Model;

class rdsMysqlInfo extends Model
{
    /**
     * @example ******
     *
     * @var string
     */
    public $connectUrl;

    /**
     * @example rm-xxxxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example ******
     *
     * @var string
     */
    public $password;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @example sg-******
     *
     * @var string
     */
    public $securityGroup;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'connectUrl'    => 'ConnectUrl',
        'instanceId'    => 'InstanceId',
        'password'      => 'Password',
        'regionId'      => 'RegionId',
        'securityGroup' => 'SecurityGroup',
        'userName'      => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectUrl) {
            $res['ConnectUrl'] = $this->connectUrl;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->securityGroup) {
            $res['SecurityGroup'] = $this->securityGroup;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rdsMysqlInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectUrl'])) {
            $model->connectUrl = $map['ConnectUrl'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SecurityGroup'])) {
            $model->securityGroup = $map['SecurityGroup'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
