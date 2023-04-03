<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateDnsGtmInstanceGlobalConfigRequest\alertConfig;
use AlibabaCloud\Tea\Model;

class UpdateDnsGtmInstanceGlobalConfigRequest extends Model
{
    /**
     * @var alertConfig[]
     */
    public $alertConfig;

    /**
     * @description The name of the alert group in the JSON format.
     *
     * @example alertGroup1
     *
     * @var string
     */
    public $alertGroup;

    /**
     * @description The type of the CNAME domain name that is used to access the instance. Valid value:
     *
     *   PUBLIC: The CNAME domain name is used to access the instance over the Internet.
     *
     * @example public
     *
     * @var string
     */
    public $cnameType;

    /**
     * @description Specifies whether to enable force updates. Valid values:
     *
     *   true: enables force update without a conflict alert.
     *   false: disables force update. If a conflict occurs, the system displays an alert. null: This valid value of ForceUpdate provides the same information as the false value.
     *
     * @example true
     *
     * @var bool
     */
    public $forceUpdate;

    /**
     * @description The ID of the instance.
     *
     * @example instance1
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the instance. This parameter is required only for the first update.
     *
     * @example test
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The language of the values of specific response parameters. Default value: en. Valid values: en, zh, and ja.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description Specifies whether to use a custom CNAME domain name or a CNAME domain name assigned by the system to access the instance over the Internet. Valid values:
     *
     *   SYSTEM_ASSIGN: a CNAME domain name assigned by the system
     *   CUSTOM: a custom CNAME domain name
     *
     * @example custom
     *
     * @var string
     */
    public $publicCnameMode;

    /**
     * @description The hostname corresponding to the CNAME domain name that is used to access the instance over the Internet.
     *
     * @example test.rr
     *
     * @var string
     */
    public $publicRr;

    /**
     * @description The service domain name that is used over the Internet.
     *
     * @example example.com
     *
     * @var string
     */
    public $publicUserDomainName;

    /**
     * @description The CNAME domain name that is used to access the instance over the Internet, which is the primary domain name. This parameter is required when the PublicCnameMode parameter is set to CUSTOM.
     *
     * >  You must use the primary domain name. Do not include the hostname specified by the PublicRr parameter.
     * @example gtm-003.com
     *
     * @var string
     */
    public $publicZoneName;

    /**
     * @description The global time to live (TTL).
     *
     * @example 1
     *
     * @var int
     */
    public $ttl;
    protected $_name = [
        'alertConfig'          => 'AlertConfig',
        'alertGroup'           => 'AlertGroup',
        'cnameType'            => 'CnameType',
        'forceUpdate'          => 'ForceUpdate',
        'instanceId'           => 'InstanceId',
        'instanceName'         => 'InstanceName',
        'lang'                 => 'Lang',
        'publicCnameMode'      => 'PublicCnameMode',
        'publicRr'             => 'PublicRr',
        'publicUserDomainName' => 'PublicUserDomainName',
        'publicZoneName'       => 'PublicZoneName',
        'ttl'                  => 'Ttl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->cnameType) {
            $res['CnameType'] = $this->cnameType;
        }
        if (null !== $this->forceUpdate) {
            $res['ForceUpdate'] = $this->forceUpdate;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->publicCnameMode) {
            $res['PublicCnameMode'] = $this->publicCnameMode;
        }
        if (null !== $this->publicRr) {
            $res['PublicRr'] = $this->publicRr;
        }
        if (null !== $this->publicUserDomainName) {
            $res['PublicUserDomainName'] = $this->publicUserDomainName;
        }
        if (null !== $this->publicZoneName) {
            $res['PublicZoneName'] = $this->publicZoneName;
        }
        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDnsGtmInstanceGlobalConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertConfig'])) {
            if (!empty($map['AlertConfig'])) {
                $model->alertConfig = [];
                $n                  = 0;
                foreach ($map['AlertConfig'] as $item) {
                    $model->alertConfig[$n++] = null !== $item ? alertConfig::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AlertGroup'])) {
            $model->alertGroup = $map['AlertGroup'];
        }
        if (isset($map['CnameType'])) {
            $model->cnameType = $map['CnameType'];
        }
        if (isset($map['ForceUpdate'])) {
            $model->forceUpdate = $map['ForceUpdate'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PublicCnameMode'])) {
            $model->publicCnameMode = $map['PublicCnameMode'];
        }
        if (isset($map['PublicRr'])) {
            $model->publicRr = $map['PublicRr'];
        }
        if (isset($map['PublicUserDomainName'])) {
            $model->publicUserDomainName = $map['PublicUserDomainName'];
        }
        if (isset($map['PublicZoneName'])) {
            $model->publicZoneName = $map['PublicZoneName'];
        }
        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }

        return $model;
    }
}
