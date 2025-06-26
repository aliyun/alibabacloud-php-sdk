<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CreateSessionClusterRequest\applicationConfigs;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CreateSessionClusterRequest\autoStartConfiguration;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\CreateSessionClusterRequest\autoStopConfiguration;

class CreateSessionClusterRequest extends Model
{
    /**
     * @var applicationConfigs[]
     */
    public $applicationConfigs;

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
    public $displayReleaseVersion;

    /**
     * @var string
     */
    public $envId;

    /**
     * @var bool
     */
    public $fusion;

    /**
     * @var string
     */
    public $kind;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $publicEndpointEnabled;

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
        'applicationConfigs' => 'applicationConfigs',
        'autoStartConfiguration' => 'autoStartConfiguration',
        'autoStopConfiguration' => 'autoStopConfiguration',
        'displayReleaseVersion' => 'displayReleaseVersion',
        'envId' => 'envId',
        'fusion' => 'fusion',
        'kind' => 'kind',
        'name' => 'name',
        'publicEndpointEnabled' => 'publicEndpointEnabled',
        'queueName' => 'queueName',
        'releaseVersion' => 'releaseVersion',
        'regionId' => 'regionId',
    ];

    public function validate()
    {
        if (\is_array($this->applicationConfigs)) {
            Model::validateArray($this->applicationConfigs);
        }
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
        if (null !== $this->applicationConfigs) {
            if (\is_array($this->applicationConfigs)) {
                $res['applicationConfigs'] = [];
                $n1 = 0;
                foreach ($this->applicationConfigs as $item1) {
                    $res['applicationConfigs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->autoStartConfiguration) {
            $res['autoStartConfiguration'] = null !== $this->autoStartConfiguration ? $this->autoStartConfiguration->toArray($noStream) : $this->autoStartConfiguration;
        }

        if (null !== $this->autoStopConfiguration) {
            $res['autoStopConfiguration'] = null !== $this->autoStopConfiguration ? $this->autoStopConfiguration->toArray($noStream) : $this->autoStopConfiguration;
        }

        if (null !== $this->displayReleaseVersion) {
            $res['displayReleaseVersion'] = $this->displayReleaseVersion;
        }

        if (null !== $this->envId) {
            $res['envId'] = $this->envId;
        }

        if (null !== $this->fusion) {
            $res['fusion'] = $this->fusion;
        }

        if (null !== $this->kind) {
            $res['kind'] = $this->kind;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->publicEndpointEnabled) {
            $res['publicEndpointEnabled'] = $this->publicEndpointEnabled;
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
        if (isset($map['applicationConfigs'])) {
            if (!empty($map['applicationConfigs'])) {
                $model->applicationConfigs = [];
                $n1 = 0;
                foreach ($map['applicationConfigs'] as $item1) {
                    $model->applicationConfigs[$n1] = applicationConfigs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['autoStartConfiguration'])) {
            $model->autoStartConfiguration = autoStartConfiguration::fromMap($map['autoStartConfiguration']);
        }

        if (isset($map['autoStopConfiguration'])) {
            $model->autoStopConfiguration = autoStopConfiguration::fromMap($map['autoStopConfiguration']);
        }

        if (isset($map['displayReleaseVersion'])) {
            $model->displayReleaseVersion = $map['displayReleaseVersion'];
        }

        if (isset($map['envId'])) {
            $model->envId = $map['envId'];
        }

        if (isset($map['fusion'])) {
            $model->fusion = $map['fusion'];
        }

        if (isset($map['kind'])) {
            $model->kind = $map['kind'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['publicEndpointEnabled'])) {
            $model->publicEndpointEnabled = $map['publicEndpointEnabled'];
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
