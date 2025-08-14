<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeUserBuyVersionResponseBody extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var int
     */
    public $expire;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceStatus;

    /**
     * @var int
     */
    public $internetBandwidth;

    /**
     * @var int
     */
    public $ipNumber;

    /**
     * @var bool
     */
    public $logStatus;

    /**
     * @var int
     */
    public $logStorage;

    /**
     * @var int
     */
    public $maxOverflow;

    /**
     * @var int
     */
    public $natBandwidth;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var bool
     */
    public $userStatus;

    /**
     * @var int
     */
    public $version;

    /**
     * @var int
     */
    public $vpcBandwidth;

    /**
     * @var int
     */
    public $vpcNumber;
    protected $_name = [
        'aliUid' => 'AliUid',
        'expire' => 'Expire',
        'instanceId' => 'InstanceId',
        'instanceStatus' => 'InstanceStatus',
        'internetBandwidth' => 'InternetBandwidth',
        'ipNumber' => 'IpNumber',
        'logStatus' => 'LogStatus',
        'logStorage' => 'LogStorage',
        'maxOverflow' => 'MaxOverflow',
        'natBandwidth' => 'NatBandwidth',
        'requestId' => 'RequestId',
        'startTime' => 'StartTime',
        'userStatus' => 'UserStatus',
        'version' => 'Version',
        'vpcBandwidth' => 'VpcBandwidth',
        'vpcNumber' => 'VpcNumber',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }

        if (null !== $this->expire) {
            $res['Expire'] = $this->expire;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }

        if (null !== $this->internetBandwidth) {
            $res['InternetBandwidth'] = $this->internetBandwidth;
        }

        if (null !== $this->ipNumber) {
            $res['IpNumber'] = $this->ipNumber;
        }

        if (null !== $this->logStatus) {
            $res['LogStatus'] = $this->logStatus;
        }

        if (null !== $this->logStorage) {
            $res['LogStorage'] = $this->logStorage;
        }

        if (null !== $this->maxOverflow) {
            $res['MaxOverflow'] = $this->maxOverflow;
        }

        if (null !== $this->natBandwidth) {
            $res['NatBandwidth'] = $this->natBandwidth;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->userStatus) {
            $res['UserStatus'] = $this->userStatus;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        if (null !== $this->vpcBandwidth) {
            $res['VpcBandwidth'] = $this->vpcBandwidth;
        }

        if (null !== $this->vpcNumber) {
            $res['VpcNumber'] = $this->vpcNumber;
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
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }

        if (isset($map['Expire'])) {
            $model->expire = $map['Expire'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }

        if (isset($map['InternetBandwidth'])) {
            $model->internetBandwidth = $map['InternetBandwidth'];
        }

        if (isset($map['IpNumber'])) {
            $model->ipNumber = $map['IpNumber'];
        }

        if (isset($map['LogStatus'])) {
            $model->logStatus = $map['LogStatus'];
        }

        if (isset($map['LogStorage'])) {
            $model->logStorage = $map['LogStorage'];
        }

        if (isset($map['MaxOverflow'])) {
            $model->maxOverflow = $map['MaxOverflow'];
        }

        if (isset($map['NatBandwidth'])) {
            $model->natBandwidth = $map['NatBandwidth'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['UserStatus'])) {
            $model->userStatus = $map['UserStatus'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        if (isset($map['VpcBandwidth'])) {
            $model->vpcBandwidth = $map['VpcBandwidth'];
        }

        if (isset($map['VpcNumber'])) {
            $model->vpcNumber = $map['VpcNumber'];
        }

        return $model;
    }
}
