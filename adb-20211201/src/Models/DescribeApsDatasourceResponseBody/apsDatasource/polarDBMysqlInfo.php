<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsDatasourceResponseBody\apsDatasource;

use AlibabaCloud\Dara\Model;

class polarDBMysqlInfo extends Model
{
    /**
     * @var bool
     */
    public $across;

    /**
     * @var string
     */
    public $acrossRole;

    /**
     * @var string
     */
    public $acrossUid;

    /**
     * @var string
     */
    public $connectUrl;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $securityGroup;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'across' => 'Across',
        'acrossRole' => 'AcrossRole',
        'acrossUid' => 'AcrossUid',
        'connectUrl' => 'ConnectUrl',
        'instanceId' => 'InstanceId',
        'regionId' => 'RegionId',
        'securityGroup' => 'SecurityGroup',
        'userName' => 'UserName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
