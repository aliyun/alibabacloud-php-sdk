<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;

class UpdateCloudGtmInstanceConfigAlertShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;
    /**
     * @var string
     */
    public $alertConfigShrink;
    /**
     * @var string
     */
    public $alertGroupShrink;
    /**
     * @var string
     */
    public $alertMode;
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var string
     */
    public $configId;
    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'acceptLanguage'    => 'AcceptLanguage',
        'alertConfigShrink' => 'AlertConfig',
        'alertGroupShrink'  => 'AlertGroup',
        'alertMode'         => 'AlertMode',
        'clientToken'       => 'ClientToken',
        'configId'          => 'ConfigId',
        'instanceId'        => 'InstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }

        if (null !== $this->alertConfigShrink) {
            $res['AlertConfig'] = $this->alertConfigShrink;
        }

        if (null !== $this->alertGroupShrink) {
            $res['AlertGroup'] = $this->alertGroupShrink;
        }

        if (null !== $this->alertMode) {
            $res['AlertMode'] = $this->alertMode;
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->configId) {
            $res['ConfigId'] = $this->configId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }

        if (isset($map['AlertConfig'])) {
            $model->alertConfigShrink = $map['AlertConfig'];
        }

        if (isset($map['AlertGroup'])) {
            $model->alertGroupShrink = $map['AlertGroup'];
        }

        if (isset($map['AlertMode'])) {
            $model->alertMode = $map['AlertMode'];
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['ConfigId'])) {
            $model->configId = $map['ConfigId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
