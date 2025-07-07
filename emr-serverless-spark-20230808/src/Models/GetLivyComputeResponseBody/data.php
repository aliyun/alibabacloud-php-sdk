<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetLivyComputeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetLivyComputeResponseBody\data\autoStopConfiguration;

class data extends Model
{
    /**
     * @var string
     */
    public $authType;

    /**
     * @var autoStopConfiguration
     */
    public $autoStopConfiguration;

    /**
     * @var string
     */
    public $computeId;

    /**
     * @var string
     */
    public $cpuLimit;

    /**
     * @var string
     */
    public $createdBy;

    /**
     * @var string
     */
    public $displayReleaseVersion;

    /**
     * @var bool
     */
    public $enablePublic;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var string
     */
    public $endpointInner;

    /**
     * @var string
     */
    public $environmentId;

    /**
     * @var bool
     */
    public $fusion;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $livyServerConf;

    /**
     * @var string
     */
    public $livyVersion;

    /**
     * @var string
     */
    public $memoryLimit;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $networkName;

    /**
     * @var string
     */
    public $queueName;

    /**
     * @var string
     */
    public $ramUserId;

    /**
     * @var string
     */
    public $releaseVersion;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'authType' => 'authType',
        'autoStopConfiguration' => 'autoStopConfiguration',
        'computeId' => 'computeId',
        'cpuLimit' => 'cpuLimit',
        'createdBy' => 'createdBy',
        'displayReleaseVersion' => 'displayReleaseVersion',
        'enablePublic' => 'enablePublic',
        'endpoint' => 'endpoint',
        'endpointInner' => 'endpointInner',
        'environmentId' => 'environmentId',
        'fusion' => 'fusion',
        'gmtCreate' => 'gmtCreate',
        'livyServerConf' => 'livyServerConf',
        'livyVersion' => 'livyVersion',
        'memoryLimit' => 'memoryLimit',
        'name' => 'name',
        'networkName' => 'networkName',
        'queueName' => 'queueName',
        'ramUserId' => 'ramUserId',
        'releaseVersion' => 'releaseVersion',
        'startTime' => 'startTime',
        'status' => 'status',
    ];

    public function validate()
    {
        if (null !== $this->autoStopConfiguration) {
            $this->autoStopConfiguration->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authType) {
            $res['authType'] = $this->authType;
        }

        if (null !== $this->autoStopConfiguration) {
            $res['autoStopConfiguration'] = null !== $this->autoStopConfiguration ? $this->autoStopConfiguration->toArray($noStream) : $this->autoStopConfiguration;
        }

        if (null !== $this->computeId) {
            $res['computeId'] = $this->computeId;
        }

        if (null !== $this->cpuLimit) {
            $res['cpuLimit'] = $this->cpuLimit;
        }

        if (null !== $this->createdBy) {
            $res['createdBy'] = $this->createdBy;
        }

        if (null !== $this->displayReleaseVersion) {
            $res['displayReleaseVersion'] = $this->displayReleaseVersion;
        }

        if (null !== $this->enablePublic) {
            $res['enablePublic'] = $this->enablePublic;
        }

        if (null !== $this->endpoint) {
            $res['endpoint'] = $this->endpoint;
        }

        if (null !== $this->endpointInner) {
            $res['endpointInner'] = $this->endpointInner;
        }

        if (null !== $this->environmentId) {
            $res['environmentId'] = $this->environmentId;
        }

        if (null !== $this->fusion) {
            $res['fusion'] = $this->fusion;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->livyServerConf) {
            $res['livyServerConf'] = $this->livyServerConf;
        }

        if (null !== $this->livyVersion) {
            $res['livyVersion'] = $this->livyVersion;
        }

        if (null !== $this->memoryLimit) {
            $res['memoryLimit'] = $this->memoryLimit;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->networkName) {
            $res['networkName'] = $this->networkName;
        }

        if (null !== $this->queueName) {
            $res['queueName'] = $this->queueName;
        }

        if (null !== $this->ramUserId) {
            $res['ramUserId'] = $this->ramUserId;
        }

        if (null !== $this->releaseVersion) {
            $res['releaseVersion'] = $this->releaseVersion;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['authType'])) {
            $model->authType = $map['authType'];
        }

        if (isset($map['autoStopConfiguration'])) {
            $model->autoStopConfiguration = autoStopConfiguration::fromMap($map['autoStopConfiguration']);
        }

        if (isset($map['computeId'])) {
            $model->computeId = $map['computeId'];
        }

        if (isset($map['cpuLimit'])) {
            $model->cpuLimit = $map['cpuLimit'];
        }

        if (isset($map['createdBy'])) {
            $model->createdBy = $map['createdBy'];
        }

        if (isset($map['displayReleaseVersion'])) {
            $model->displayReleaseVersion = $map['displayReleaseVersion'];
        }

        if (isset($map['enablePublic'])) {
            $model->enablePublic = $map['enablePublic'];
        }

        if (isset($map['endpoint'])) {
            $model->endpoint = $map['endpoint'];
        }

        if (isset($map['endpointInner'])) {
            $model->endpointInner = $map['endpointInner'];
        }

        if (isset($map['environmentId'])) {
            $model->environmentId = $map['environmentId'];
        }

        if (isset($map['fusion'])) {
            $model->fusion = $map['fusion'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['livyServerConf'])) {
            $model->livyServerConf = $map['livyServerConf'];
        }

        if (isset($map['livyVersion'])) {
            $model->livyVersion = $map['livyVersion'];
        }

        if (isset($map['memoryLimit'])) {
            $model->memoryLimit = $map['memoryLimit'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['networkName'])) {
            $model->networkName = $map['networkName'];
        }

        if (isset($map['queueName'])) {
            $model->queueName = $map['queueName'];
        }

        if (isset($map['ramUserId'])) {
            $model->ramUserId = $map['ramUserId'];
        }

        if (isset($map['releaseVersion'])) {
            $model->releaseVersion = $map['releaseVersion'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
