<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CreateLivyComputeRequest\autoStartConfiguration;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CreateLivyComputeRequest\autoStopConfiguration;

class CreateLivyComputeRequest extends Model
{
    /**
     * @var string
     */
    public $authType;

    /**
     * @var autoStartConfiguration
     */
    public $autoStartConfiguration;

    /**
     * @var autoStopConfiguration
     */
    public $autoStopConfiguration;

    /**
     * @var string
     */
    public $cpuLimit;

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
    public $environmentId;

    /**
     * @var bool
     */
    public $fusion;

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
    public $releaseVersion;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'authType' => 'authType',
        'autoStartConfiguration' => 'autoStartConfiguration',
        'autoStopConfiguration' => 'autoStopConfiguration',
        'cpuLimit' => 'cpuLimit',
        'displayReleaseVersion' => 'displayReleaseVersion',
        'enablePublic' => 'enablePublic',
        'environmentId' => 'environmentId',
        'fusion' => 'fusion',
        'livyServerConf' => 'livyServerConf',
        'livyVersion' => 'livyVersion',
        'memoryLimit' => 'memoryLimit',
        'name' => 'name',
        'networkName' => 'networkName',
        'queueName' => 'queueName',
        'releaseVersion' => 'releaseVersion',
        'regionId' => 'regionId',
    ];

    public function validate()
    {
        if (null !== $this->autoStartConfiguration) {
            $this->autoStartConfiguration->validate();
        }
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

        if (null !== $this->autoStartConfiguration) {
            $res['autoStartConfiguration'] = null !== $this->autoStartConfiguration ? $this->autoStartConfiguration->toArray($noStream) : $this->autoStartConfiguration;
        }

        if (null !== $this->autoStopConfiguration) {
            $res['autoStopConfiguration'] = null !== $this->autoStopConfiguration ? $this->autoStopConfiguration->toArray($noStream) : $this->autoStopConfiguration;
        }

        if (null !== $this->cpuLimit) {
            $res['cpuLimit'] = $this->cpuLimit;
        }

        if (null !== $this->displayReleaseVersion) {
            $res['displayReleaseVersion'] = $this->displayReleaseVersion;
        }

        if (null !== $this->enablePublic) {
            $res['enablePublic'] = $this->enablePublic;
        }

        if (null !== $this->environmentId) {
            $res['environmentId'] = $this->environmentId;
        }

        if (null !== $this->fusion) {
            $res['fusion'] = $this->fusion;
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

        if (null !== $this->releaseVersion) {
            $res['releaseVersion'] = $this->releaseVersion;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
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

        if (isset($map['autoStartConfiguration'])) {
            $model->autoStartConfiguration = autoStartConfiguration::fromMap($map['autoStartConfiguration']);
        }

        if (isset($map['autoStopConfiguration'])) {
            $model->autoStopConfiguration = autoStopConfiguration::fromMap($map['autoStopConfiguration']);
        }

        if (isset($map['cpuLimit'])) {
            $model->cpuLimit = $map['cpuLimit'];
        }

        if (isset($map['displayReleaseVersion'])) {
            $model->displayReleaseVersion = $map['displayReleaseVersion'];
        }

        if (isset($map['enablePublic'])) {
            $model->enablePublic = $map['enablePublic'];
        }

        if (isset($map['environmentId'])) {
            $model->environmentId = $map['environmentId'];
        }

        if (isset($map['fusion'])) {
            $model->fusion = $map['fusion'];
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

        if (isset($map['releaseVersion'])) {
            $model->releaseVersion = $map['releaseVersion'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        return $model;
    }
}
