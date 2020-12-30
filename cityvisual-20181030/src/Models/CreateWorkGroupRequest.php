<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cityvisual\V20181030\Models;

use AlibabaCloud\Tea\Model;

class CreateWorkGroupRequest extends Model
{
    /**
     * @var string
     */
    public $workGroupName;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $theoryCutStatus;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $jobNum;

    /**
     * @var int
     */
    public $topicNum;

    /**
     * @var string
     */
    public $topicPrefix;

    /**
     * @var string
     */
    public $account;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $ip;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'workGroupName'   => 'WorkGroupName',
        'protocol'        => 'Protocol',
        'theoryCutStatus' => 'TheoryCutStatus',
        'description'     => 'Description',
        'jobNum'          => 'JobNum',
        'topicNum'        => 'TopicNum',
        'topicPrefix'     => 'TopicPrefix',
        'account'         => 'Account',
        'password'        => 'Password',
        'ip'              => 'Ip',
        'port'            => 'Port',
        'instanceId'      => 'InstanceId',
        'regionId'        => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->workGroupName) {
            $res['WorkGroupName'] = $this->workGroupName;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->theoryCutStatus) {
            $res['TheoryCutStatus'] = $this->theoryCutStatus;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->jobNum) {
            $res['JobNum'] = $this->jobNum;
        }
        if (null !== $this->topicNum) {
            $res['TopicNum'] = $this->topicNum;
        }
        if (null !== $this->topicPrefix) {
            $res['TopicPrefix'] = $this->topicPrefix;
        }
        if (null !== $this->account) {
            $res['Account'] = $this->account;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->ip) {
            $res['Ip'] = $this->ip;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateWorkGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WorkGroupName'])) {
            $model->workGroupName = $map['WorkGroupName'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['TheoryCutStatus'])) {
            $model->theoryCutStatus = $map['TheoryCutStatus'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['JobNum'])) {
            $model->jobNum = $map['JobNum'];
        }
        if (isset($map['TopicNum'])) {
            $model->topicNum = $map['TopicNum'];
        }
        if (isset($map['TopicPrefix'])) {
            $model->topicPrefix = $map['TopicPrefix'];
        }
        if (isset($map['Account'])) {
            $model->account = $map['Account'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['Ip'])) {
            $model->ip = $map['Ip'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
