<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class SourceDTSParameters extends Model
{
    /**
     * @example dts-cn-shanghai-vpc.com:18003
     *
     * @var string
     */
    public $brokerUrl;

    /**
     * @example 1677340805
     *
     * @var int
     */
    public $initCheckPoint;

    /**
     * @example dtsTest123
     *
     * @var string
     */
    public $password;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example dtse34j22j025a****
     *
     * @var string
     */
    public $sid;

    /**
     * @example e34z2gm325q****
     *
     * @var string
     */
    public $taskId;

    /**
     * @example cn_shanghai_vpc_rm_uf6398ykj0218****_dts_trigger_upgrade_from_old_version2
     *
     * @var string
     */
    public $topic;

    /**
     * @example dts_trigger
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'brokerUrl'      => 'BrokerUrl',
        'initCheckPoint' => 'InitCheckPoint',
        'password'       => 'Password',
        'regionId'       => 'RegionId',
        'sid'            => 'Sid',
        'taskId'         => 'TaskId',
        'topic'          => 'Topic',
        'username'       => 'Username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->brokerUrl) {
            $res['BrokerUrl'] = $this->brokerUrl;
        }
        if (null !== $this->initCheckPoint) {
            $res['InitCheckPoint'] = $this->initCheckPoint;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sid) {
            $res['Sid'] = $this->sid;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SourceDTSParameters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BrokerUrl'])) {
            $model->brokerUrl = $map['BrokerUrl'];
        }
        if (isset($map['InitCheckPoint'])) {
            $model->initCheckPoint = $map['InitCheckPoint'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Sid'])) {
            $model->sid = $map['Sid'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
