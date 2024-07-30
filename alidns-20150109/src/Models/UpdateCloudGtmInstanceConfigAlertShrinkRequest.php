<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class UpdateCloudGtmInstanceConfigAlertShrinkRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     *   zh-CN: Chinese
     *   en-US: English
     *
     * @example zh-CN
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The alert configurations.
     *
     * @var string
     */
    public $alertConfigShrink;

    /**
     * @description The alert contact groups.
     *
     * @var string
     */
    public $alertGroupShrink;

    /**
     * @description The alert configuration mode of the instance. Valid values:
     *
     *   global: global alert configuration
     *   instance_config: custom alert configuration
     *
     * @example global
     *
     * @var string
     */
    public $alertMode;

    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters and cannot exceed 64 characters in length.
     *
     * @example 1ae05db4-10e7-11ef-b126-00163e24**22
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The configuration ID of the access domain name. Two configuration IDs exist when an A record and an AAAA record are configured for the access domain name that is bound to the GTM instance. This ID uniquely identifies a configuration.
     *
     * @example Config-000**11
     *
     * @var string
     */
    public $configId;

    /**
     * @description The ID of the Global Traffic Manager (GTM) 3.0 instance.
     *
     * @example gtm-cn-zz11t58**0s
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return UpdateCloudGtmInstanceConfigAlertShrinkRequest
     */
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
