<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentTeams\V20260605\Models\CreateWorkerBootstrapTokenResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentTeams\V20260605\Models\CreateWorkerBootstrapTokenResponseBody\data\cms;

class data extends Model
{
    /**
     * @var string
     */
    public $bootstrapToken;

    /**
     * @var cms
     */
    public $cms;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $tokenFingerprint;
    protected $_name = [
        'bootstrapToken' => 'BootstrapToken',
        'cms' => 'Cms',
        'instanceId' => 'InstanceId',
        'name' => 'Name',
        'networkType' => 'NetworkType',
        'tokenFingerprint' => 'TokenFingerprint',
    ];

    public function validate()
    {
        if (null !== $this->cms) {
            $this->cms->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bootstrapToken) {
            $res['BootstrapToken'] = $this->bootstrapToken;
        }

        if (null !== $this->cms) {
            $res['Cms'] = null !== $this->cms ? $this->cms->toArray($noStream) : $this->cms;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }

        if (null !== $this->tokenFingerprint) {
            $res['TokenFingerprint'] = $this->tokenFingerprint;
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
        if (isset($map['BootstrapToken'])) {
            $model->bootstrapToken = $map['BootstrapToken'];
        }

        if (isset($map['Cms'])) {
            $model->cms = cms::fromMap($map['Cms']);
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }

        if (isset($map['TokenFingerprint'])) {
            $model->tokenFingerprint = $map['TokenFingerprint'];
        }

        return $model;
    }
}
