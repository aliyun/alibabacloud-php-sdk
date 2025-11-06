<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models\InstancePreivewResponseBody\data\instances;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Amqp\V20190901\Models\InstancePreivewResponseBody\data\instances\instancesVO\tags;

class instancesVO extends Model
{
    /**
     * @var bool
     */
    public $autoRenew;

    /**
     * @var bool
     */
    public $ceaseStatus;

    /**
     * @var string
     */
    public $classicEndpoint;

    /**
     * @var bool
     */
    public $enableDlqTtl;

    /**
     * @var bool
     */
    public $encrypted;

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
    public $instanceName;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var int
     */
    public $invisibleTime;

    /**
     * @var string
     */
    public $kmsKeyId;

    /**
     * @var int
     */
    public $maxBindingCount;

    /**
     * @var int
     */
    public $maxConnectionChannelCount;

    /**
     * @var int
     */
    public $maxConnectionCount;

    /**
     * @var int
     */
    public $maxConsumeRetryTime;

    /**
     * @var int
     */
    public $maxEIPTPS;

    /**
     * @var int
     */
    public $maxExchangeCount;

    /**
     * @var int
     */
    public $maxMsgBodyByte;

    /**
     * @var int
     */
    public $maxMsgDelayHour;

    /**
     * @var int
     */
    public $maxMsgTraceTime;

    /**
     * @var int
     */
    public $maxQueue;

    /**
     * @var int
     */
    public $maxQueueConsumerCount;

    /**
     * @var int
     */
    public $maxRetryInterval;

    /**
     * @var int
     */
    public $maxRetryTimes;

    /**
     * @var int
     */
    public $maxTPS;

    /**
     * @var int
     */
    public $maxVhost;

    /**
     * @var int
     */
    public $orderCreate;

    /**
     * @var string
     */
    public $orderType;

    /**
     * @var string
     */
    public $privateEndpoint;

    /**
     * @var string
     */
    public $publicEndpoint;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var float
     */
    public $serverlessRate;

    /**
     * @var bool
     */
    public $serverlessSwitch;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $storageSize;

    /**
     * @var bool
     */
    public $supportEIP;

    /**
     * @var bool
     */
    public $supportMsgTrace;

    /**
     * @var bool
     */
    public $supportOpenSourceAuth;

    /**
     * @var tags
     */
    public $tags;

    /**
     * @var int
     */
    public $usedQueue;

    /**
     * @var int
     */
    public $usedVhost;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'autoRenew' => 'AutoRenew',
        'ceaseStatus' => 'CeaseStatus',
        'classicEndpoint' => 'ClassicEndpoint',
        'enableDlqTtl' => 'EnableDlqTtl',
        'encrypted' => 'Encrypted',
        'expire' => 'Expire',
        'instanceId' => 'InstanceId',
        'instanceName' => 'InstanceName',
        'instanceType' => 'InstanceType',
        'invisibleTime' => 'InvisibleTime',
        'kmsKeyId' => 'KmsKeyId',
        'maxBindingCount' => 'MaxBindingCount',
        'maxConnectionChannelCount' => 'MaxConnectionChannelCount',
        'maxConnectionCount' => 'MaxConnectionCount',
        'maxConsumeRetryTime' => 'MaxConsumeRetryTime',
        'maxEIPTPS' => 'MaxEIPTPS',
        'maxExchangeCount' => 'MaxExchangeCount',
        'maxMsgBodyByte' => 'MaxMsgBodyByte',
        'maxMsgDelayHour' => 'MaxMsgDelayHour',
        'maxMsgTraceTime' => 'MaxMsgTraceTime',
        'maxQueue' => 'MaxQueue',
        'maxQueueConsumerCount' => 'MaxQueueConsumerCount',
        'maxRetryInterval' => 'MaxRetryInterval',
        'maxRetryTimes' => 'MaxRetryTimes',
        'maxTPS' => 'MaxTPS',
        'maxVhost' => 'MaxVhost',
        'orderCreate' => 'OrderCreate',
        'orderType' => 'OrderType',
        'privateEndpoint' => 'PrivateEndpoint',
        'publicEndpoint' => 'PublicEndpoint',
        'resourceGroupId' => 'ResourceGroupId',
        'serverlessRate' => 'ServerlessRate',
        'serverlessSwitch' => 'ServerlessSwitch',
        'status' => 'Status',
        'storageSize' => 'StorageSize',
        'supportEIP' => 'SupportEIP',
        'supportMsgTrace' => 'SupportMsgTrace',
        'supportOpenSourceAuth' => 'SupportOpenSourceAuth',
        'tags' => 'Tags',
        'usedQueue' => 'UsedQueue',
        'usedVhost' => 'UsedVhost',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (null !== $this->tags) {
            $this->tags->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }

        if (null !== $this->ceaseStatus) {
            $res['CeaseStatus'] = $this->ceaseStatus;
        }

        if (null !== $this->classicEndpoint) {
            $res['ClassicEndpoint'] = $this->classicEndpoint;
        }

        if (null !== $this->enableDlqTtl) {
            $res['EnableDlqTtl'] = $this->enableDlqTtl;
        }

        if (null !== $this->encrypted) {
            $res['Encrypted'] = $this->encrypted;
        }

        if (null !== $this->expire) {
            $res['Expire'] = $this->expire;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->invisibleTime) {
            $res['InvisibleTime'] = $this->invisibleTime;
        }

        if (null !== $this->kmsKeyId) {
            $res['KmsKeyId'] = $this->kmsKeyId;
        }

        if (null !== $this->maxBindingCount) {
            $res['MaxBindingCount'] = $this->maxBindingCount;
        }

        if (null !== $this->maxConnectionChannelCount) {
            $res['MaxConnectionChannelCount'] = $this->maxConnectionChannelCount;
        }

        if (null !== $this->maxConnectionCount) {
            $res['MaxConnectionCount'] = $this->maxConnectionCount;
        }

        if (null !== $this->maxConsumeRetryTime) {
            $res['MaxConsumeRetryTime'] = $this->maxConsumeRetryTime;
        }

        if (null !== $this->maxEIPTPS) {
            $res['MaxEIPTPS'] = $this->maxEIPTPS;
        }

        if (null !== $this->maxExchangeCount) {
            $res['MaxExchangeCount'] = $this->maxExchangeCount;
        }

        if (null !== $this->maxMsgBodyByte) {
            $res['MaxMsgBodyByte'] = $this->maxMsgBodyByte;
        }

        if (null !== $this->maxMsgDelayHour) {
            $res['MaxMsgDelayHour'] = $this->maxMsgDelayHour;
        }

        if (null !== $this->maxMsgTraceTime) {
            $res['MaxMsgTraceTime'] = $this->maxMsgTraceTime;
        }

        if (null !== $this->maxQueue) {
            $res['MaxQueue'] = $this->maxQueue;
        }

        if (null !== $this->maxQueueConsumerCount) {
            $res['MaxQueueConsumerCount'] = $this->maxQueueConsumerCount;
        }

        if (null !== $this->maxRetryInterval) {
            $res['MaxRetryInterval'] = $this->maxRetryInterval;
        }

        if (null !== $this->maxRetryTimes) {
            $res['MaxRetryTimes'] = $this->maxRetryTimes;
        }

        if (null !== $this->maxTPS) {
            $res['MaxTPS'] = $this->maxTPS;
        }

        if (null !== $this->maxVhost) {
            $res['MaxVhost'] = $this->maxVhost;
        }

        if (null !== $this->orderCreate) {
            $res['OrderCreate'] = $this->orderCreate;
        }

        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }

        if (null !== $this->privateEndpoint) {
            $res['PrivateEndpoint'] = $this->privateEndpoint;
        }

        if (null !== $this->publicEndpoint) {
            $res['PublicEndpoint'] = $this->publicEndpoint;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->serverlessRate) {
            $res['ServerlessRate'] = $this->serverlessRate;
        }

        if (null !== $this->serverlessSwitch) {
            $res['ServerlessSwitch'] = $this->serverlessSwitch;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->storageSize) {
            $res['StorageSize'] = $this->storageSize;
        }

        if (null !== $this->supportEIP) {
            $res['SupportEIP'] = $this->supportEIP;
        }

        if (null !== $this->supportMsgTrace) {
            $res['SupportMsgTrace'] = $this->supportMsgTrace;
        }

        if (null !== $this->supportOpenSourceAuth) {
            $res['SupportOpenSourceAuth'] = $this->supportOpenSourceAuth;
        }

        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toArray($noStream) : $this->tags;
        }

        if (null !== $this->usedQueue) {
            $res['UsedQueue'] = $this->usedQueue;
        }

        if (null !== $this->usedVhost) {
            $res['UsedVhost'] = $this->usedVhost;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }

        if (isset($map['CeaseStatus'])) {
            $model->ceaseStatus = $map['CeaseStatus'];
        }

        if (isset($map['ClassicEndpoint'])) {
            $model->classicEndpoint = $map['ClassicEndpoint'];
        }

        if (isset($map['EnableDlqTtl'])) {
            $model->enableDlqTtl = $map['EnableDlqTtl'];
        }

        if (isset($map['Encrypted'])) {
            $model->encrypted = $map['Encrypted'];
        }

        if (isset($map['Expire'])) {
            $model->expire = $map['Expire'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['InvisibleTime'])) {
            $model->invisibleTime = $map['InvisibleTime'];
        }

        if (isset($map['KmsKeyId'])) {
            $model->kmsKeyId = $map['KmsKeyId'];
        }

        if (isset($map['MaxBindingCount'])) {
            $model->maxBindingCount = $map['MaxBindingCount'];
        }

        if (isset($map['MaxConnectionChannelCount'])) {
            $model->maxConnectionChannelCount = $map['MaxConnectionChannelCount'];
        }

        if (isset($map['MaxConnectionCount'])) {
            $model->maxConnectionCount = $map['MaxConnectionCount'];
        }

        if (isset($map['MaxConsumeRetryTime'])) {
            $model->maxConsumeRetryTime = $map['MaxConsumeRetryTime'];
        }

        if (isset($map['MaxEIPTPS'])) {
            $model->maxEIPTPS = $map['MaxEIPTPS'];
        }

        if (isset($map['MaxExchangeCount'])) {
            $model->maxExchangeCount = $map['MaxExchangeCount'];
        }

        if (isset($map['MaxMsgBodyByte'])) {
            $model->maxMsgBodyByte = $map['MaxMsgBodyByte'];
        }

        if (isset($map['MaxMsgDelayHour'])) {
            $model->maxMsgDelayHour = $map['MaxMsgDelayHour'];
        }

        if (isset($map['MaxMsgTraceTime'])) {
            $model->maxMsgTraceTime = $map['MaxMsgTraceTime'];
        }

        if (isset($map['MaxQueue'])) {
            $model->maxQueue = $map['MaxQueue'];
        }

        if (isset($map['MaxQueueConsumerCount'])) {
            $model->maxQueueConsumerCount = $map['MaxQueueConsumerCount'];
        }

        if (isset($map['MaxRetryInterval'])) {
            $model->maxRetryInterval = $map['MaxRetryInterval'];
        }

        if (isset($map['MaxRetryTimes'])) {
            $model->maxRetryTimes = $map['MaxRetryTimes'];
        }

        if (isset($map['MaxTPS'])) {
            $model->maxTPS = $map['MaxTPS'];
        }

        if (isset($map['MaxVhost'])) {
            $model->maxVhost = $map['MaxVhost'];
        }

        if (isset($map['OrderCreate'])) {
            $model->orderCreate = $map['OrderCreate'];
        }

        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }

        if (isset($map['PrivateEndpoint'])) {
            $model->privateEndpoint = $map['PrivateEndpoint'];
        }

        if (isset($map['PublicEndpoint'])) {
            $model->publicEndpoint = $map['PublicEndpoint'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ServerlessRate'])) {
            $model->serverlessRate = $map['ServerlessRate'];
        }

        if (isset($map['ServerlessSwitch'])) {
            $model->serverlessSwitch = $map['ServerlessSwitch'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StorageSize'])) {
            $model->storageSize = $map['StorageSize'];
        }

        if (isset($map['SupportEIP'])) {
            $model->supportEIP = $map['SupportEIP'];
        }

        if (isset($map['SupportMsgTrace'])) {
            $model->supportMsgTrace = $map['SupportMsgTrace'];
        }

        if (isset($map['SupportOpenSourceAuth'])) {
            $model->supportOpenSourceAuth = $map['SupportOpenSourceAuth'];
        }

        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
        }

        if (isset($map['UsedQueue'])) {
            $model->usedQueue = $map['UsedQueue'];
        }

        if (isset($map['UsedVhost'])) {
            $model->usedVhost = $map['UsedVhost'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
