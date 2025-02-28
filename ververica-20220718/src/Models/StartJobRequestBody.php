<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Dara\Model;

class StartJobRequestBody extends Model
{
    /**
     * @var string
     */
    public $deploymentId;
    /**
     * @var BriefResourceSetting
     */
    public $resourceSettingSpec;
    /**
     * @var DeploymentRestoreStrategy
     */
    public $restoreStrategy;
    protected $_name = [
        'deploymentId'        => 'deploymentId',
        'resourceSettingSpec' => 'resourceSettingSpec',
        'restoreStrategy'     => 'restoreStrategy',
    ];

    public function validate()
    {
        if (null !== $this->resourceSettingSpec) {
            $this->resourceSettingSpec->validate();
        }
        if (null !== $this->restoreStrategy) {
            $this->restoreStrategy->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deploymentId) {
            $res['deploymentId'] = $this->deploymentId;
        }

        if (null !== $this->resourceSettingSpec) {
            $res['resourceSettingSpec'] = null !== $this->resourceSettingSpec ? $this->resourceSettingSpec->toArray($noStream) : $this->resourceSettingSpec;
        }

        if (null !== $this->restoreStrategy) {
            $res['restoreStrategy'] = null !== $this->restoreStrategy ? $this->restoreStrategy->toArray($noStream) : $this->restoreStrategy;
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
        if (isset($map['deploymentId'])) {
            $model->deploymentId = $map['deploymentId'];
        }

        if (isset($map['resourceSettingSpec'])) {
            $model->resourceSettingSpec = BriefResourceSetting::fromMap($map['resourceSettingSpec']);
        }

        if (isset($map['restoreStrategy'])) {
            $model->restoreStrategy = DeploymentRestoreStrategy::fromMap($map['restoreStrategy']);
        }

        return $model;
    }
}
