<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\CreateApsDatasoureRequest;

use AlibabaCloud\Tea\Model;

class polarDBMysqlInfo extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $across;

    /**
     * @example test-role
     *
     * @var string
     */
    public $acrossRole;

    /**
     * @example 123456789*
     *
     * @var string
     */
    public $acrossUid;

    /**
     * @example ****
     *
     * @var string
     */
    public $connectUrl;

    /**
     * @example pc-bp*********
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example ***
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
     * @example test-user-name
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'across'        => 'Across',
        'acrossRole'    => 'AcrossRole',
        'acrossUid'     => 'AcrossUid',
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
        if (null !== $this->across) {
            $res['Across'] = $this->across;
        }
        if (null !== $this->acrossRole) {
            $res['AcrossRole'] = $this->acrossRole;
        }
        if (null !== $this->acrossUid) {
            $res['AcrossUid'] = $this->acrossUid;
        }
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
     * @return polarDBMysqlInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Across'])) {
            $model->across = $map['Across'];
        }
        if (isset($map['AcrossRole'])) {
            $model->acrossRole = $map['AcrossRole'];
        }
        if (isset($map['AcrossUid'])) {
            $model->acrossUid = $map['AcrossUid'];
        }
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
