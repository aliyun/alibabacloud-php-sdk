<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class DescribeUserBuyVersionResponseBody extends Model
{
    /**
     * @var int
     */
    public $ackClusterConnectorQuota;

    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var int
     */
    public $defaultBandwidth;

    /**
     * @var int
     */
    public $expire;

    /**
     * @var int
     */
    public $extensionBandwidth;

    /**
     * @var int
     */
    public $generalInstance;

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
    public $majorVersion;

    /**
     * @var int
     */
    public $maxOverflow;

    /**
     * @var int
     */
    public $natBandwidth;

    /**
     * @var int
     */
    public $privateDnsConnectorQuota;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $sdl;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $temporaryBandwidth;

    /**
     * @var int
     */
    public $threatIntelligence;

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
        'ackClusterConnectorQuota' => 'AckClusterConnectorQuota',
        'aliUid' => 'AliUid',
        'defaultBandwidth' => 'DefaultBandwidth',
        'expire' => 'Expire',
        'extensionBandwidth' => 'ExtensionBandwidth',
        'generalInstance' => 'GeneralInstance',
        'instanceId' => 'InstanceId',
        'instanceStatus' => 'InstanceStatus',
        'internetBandwidth' => 'InternetBandwidth',
        'ipNumber' => 'IpNumber',
        'logStatus' => 'LogStatus',
        'logStorage' => 'LogStorage',
        'majorVersion' => 'MajorVersion',
        'maxOverflow' => 'MaxOverflow',
        'natBandwidth' => 'NatBandwidth',
        'privateDnsConnectorQuota' => 'PrivateDnsConnectorQuota',
        'requestId' => 'RequestId',
        'sdl' => 'Sdl',
        'startTime' => 'StartTime',
        'temporaryBandwidth' => 'TemporaryBandwidth',
        'threatIntelligence' => 'ThreatIntelligence',
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
        if (null !== $this->ackClusterConnectorQuota) {
            $res['AckClusterConnectorQuota'] = $this->ackClusterConnectorQuota;
        }

        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }

        if (null !== $this->defaultBandwidth) {
            $res['DefaultBandwidth'] = $this->defaultBandwidth;
        }

        if (null !== $this->expire) {
            $res['Expire'] = $this->expire;
        }

        if (null !== $this->extensionBandwidth) {
            $res['ExtensionBandwidth'] = $this->extensionBandwidth;
        }

        if (null !== $this->generalInstance) {
            $res['GeneralInstance'] = $this->generalInstance;
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

        if (null !== $this->majorVersion) {
            $res['MajorVersion'] = $this->majorVersion;
        }

        if (null !== $this->maxOverflow) {
            $res['MaxOverflow'] = $this->maxOverflow;
        }

        if (null !== $this->natBandwidth) {
            $res['NatBandwidth'] = $this->natBandwidth;
        }

        if (null !== $this->privateDnsConnectorQuota) {
            $res['PrivateDnsConnectorQuota'] = $this->privateDnsConnectorQuota;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sdl) {
            $res['Sdl'] = $this->sdl;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->temporaryBandwidth) {
            $res['TemporaryBandwidth'] = $this->temporaryBandwidth;
        }

        if (null !== $this->threatIntelligence) {
            $res['ThreatIntelligence'] = $this->threatIntelligence;
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
        if (isset($map['AckClusterConnectorQuota'])) {
            $model->ackClusterConnectorQuota = $map['AckClusterConnectorQuota'];
        }

        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }

        if (isset($map['DefaultBandwidth'])) {
            $model->defaultBandwidth = $map['DefaultBandwidth'];
        }

        if (isset($map['Expire'])) {
            $model->expire = $map['Expire'];
        }

        if (isset($map['ExtensionBandwidth'])) {
            $model->extensionBandwidth = $map['ExtensionBandwidth'];
        }

        if (isset($map['GeneralInstance'])) {
            $model->generalInstance = $map['GeneralInstance'];
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

        if (isset($map['MajorVersion'])) {
            $model->majorVersion = $map['MajorVersion'];
        }

        if (isset($map['MaxOverflow'])) {
            $model->maxOverflow = $map['MaxOverflow'];
        }

        if (isset($map['NatBandwidth'])) {
            $model->natBandwidth = $map['NatBandwidth'];
        }

        if (isset($map['PrivateDnsConnectorQuota'])) {
            $model->privateDnsConnectorQuota = $map['PrivateDnsConnectorQuota'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Sdl'])) {
            $model->sdl = $map['Sdl'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['TemporaryBandwidth'])) {
            $model->temporaryBandwidth = $map['TemporaryBandwidth'];
        }

        if (isset($map['ThreatIntelligence'])) {
            $model->threatIntelligence = $map['ThreatIntelligence'];
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
