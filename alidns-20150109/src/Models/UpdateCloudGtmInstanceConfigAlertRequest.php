<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateCloudGtmInstanceConfigAlertRequest\alertConfig;
use AlibabaCloud\Tea\Model;

class UpdateCloudGtmInstanceConfigAlertRequest extends Model
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
     * @var alertConfig[]
     */
    public $alertConfig;

    /**
     * @description The alert contact groups.
     *
     * @var string[]
     */
    public $alertGroup;

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
        'acceptLanguage' => 'AcceptLanguage',
        'alertConfig' => 'AlertConfig',
        'alertGroup' => 'AlertGroup',
        'alertMode' => 'AlertMode',
        'clientToken' => 'ClientToken',
        'configId' => 'ConfigId',
        'instanceId' => 'InstanceId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->alertConfig) {
            $res['AlertConfig'] = [];
            if (null !== $this->alertConfig && \is_array($this->alertConfig)) {
                $n = 0;
                foreach ($this->alertConfig as $item) {
                    $res['AlertConfig'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->alertGroup) {
            $res['AlertGroup'] = $this->alertGroup;
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
     * @return UpdateCloudGtmInstanceConfigAlertRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['AlertConfig'])) {
            if (!empty($map['AlertConfig'])) {
                $model->alertConfig = [];
                $n = 0;
                foreach ($map['AlertConfig'] as $item) {
                    $model->alertConfig[$n++] = null !== $item ? alertConfig::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AlertGroup'])) {
            if (!empty($map['AlertGroup'])) {
                $model->alertGroup = $map['AlertGroup'];
            }
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
