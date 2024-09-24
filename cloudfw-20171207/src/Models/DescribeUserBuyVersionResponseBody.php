<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribeUserBuyVersionResponseBody extends Model
{
    /**
     * @example 119898001566xxxx
     *
     * @var int
     */
    public $aliUid;

    /**
     * @example 1726934400000
     *
     * @var int
     */
    public $expire;

    /**
     * @example vipcloudfw-cn-xxxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example normal
     *
     * @var string
     */
    public $instanceStatus;

    /**
     * @example 63
     *
     * @var int
     */
    public $ipNumber;

    /**
     * @example true
     *
     * @var bool
     */
    public $logStatus;

    /**
     * @example 3000
     *
     * @var int
     */
    public $logStorage;

    /**
     * @example 0
     *
     * @var int
     */
    public $maxOverflow;

    /**
     * @example F71B03EE-xxxxx-91D79CC6AA1A
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 1692504764000
     *
     * @var int
     */
    public $startTime;

    /**
     * @example true
     *
     * @var bool
     */
    public $userStatus;

    /**
     * @example 2
     *
     * @var int
     */
    public $version;

    /**
     * @example 21
     *
     * @var int
     */
    public $vpcNumber;
    protected $_name = [
        'aliUid'         => 'AliUid',
        'expire'         => 'Expire',
        'instanceId'     => 'InstanceId',
        'instanceStatus' => 'InstanceStatus',
        'ipNumber'       => 'IpNumber',
        'logStatus'      => 'LogStatus',
        'logStorage'     => 'LogStorage',
        'maxOverflow'    => 'MaxOverflow',
        'requestId'      => 'RequestId',
        'startTime'      => 'StartTime',
        'userStatus'     => 'UserStatus',
        'version'        => 'Version',
        'vpcNumber'      => 'VpcNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->vpcNumber) {
            $res['VpcNumber'] = $this->vpcNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUserBuyVersionResponseBody
     */
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
        if (isset($map['VpcNumber'])) {
            $model->vpcNumber = $map['VpcNumber'];
        }

        return $model;
    }
}
