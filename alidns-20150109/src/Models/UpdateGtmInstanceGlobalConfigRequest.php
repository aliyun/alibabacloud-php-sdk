<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class UpdateGtmInstanceGlobalConfigRequest extends Model
{
    /**
     * @description The alert group. Only one alert group is supported.
     *
     * >  This parameter is required only for the first modification.
     * @var string
     */
    public $alertGroup;

    /**
     * @description If you set **CnameMode** to **CUSTOM**, you must specify the CnameCustomDomainName parameter, which must be set to a primary domain name.
     *
     * @example www.example.com
     *
     * @var string
     */
    public $cnameCustomDomainName;

    /**
     * @description Specifies whether to use a system-assigned canonical name (CNAME) or a custom CNAME to access GTM. Valid values:
     *
     *   **SYSTEM_ASSIGN**: system-assigned CNAME
     *   **CUSTOM**: custom CNAME
     *
     * @example SYSTEM_ASSIGN
     *
     * @var string
     */
    public $cnameMode;

    /**
     * @description The ID of the GTM instance.
     *
     * @example instance1
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the GTM instance.
     *
     * >  This parameter is required only for the first modification.
     * @var string
     */
    public $instanceName;

    /**
     * @description The language.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The balancing policy. Valid values:
     *
     *   **ALL_RR**: load balancing
     *   **RATIO**: weighted round-robin
     *
     * >  This parameter is required only for the first modification.
     * @example RATIO
     *
     * @var string
     */
    public $lbaStrategy;

    /**
     * @description The global time-to-live (TTL).
     *
     * @example 60
     *
     * @var int
     */
    public $ttl;

    /**
     * @description The primary domain name.
     *
     * >  This parameter is required only for the first modification.
     * @example www.example.com
     *
     * @var string
     */
    public $userDomainName;
    protected $_name = [
        'alertGroup'            => 'AlertGroup',
        'cnameCustomDomainName' => 'CnameCustomDomainName',
        'cnameMode'             => 'CnameMode',
        'instanceId'            => 'InstanceId',
        'instanceName'          => 'InstanceName',
        'lang'                  => 'Lang',
        'lbaStrategy'           => 'LbaStrategy',
        'ttl'                   => 'Ttl',
        'userDomainName'        => 'UserDomainName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertGroup) {
            $res['AlertGroup'] = $this->alertGroup;
        }
        if (null !== $this->cnameCustomDomainName) {
            $res['CnameCustomDomainName'] = $this->cnameCustomDomainName;
        }
        if (null !== $this->cnameMode) {
            $res['CnameMode'] = $this->cnameMode;
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
        if (null !== $this->lbaStrategy) {
            $res['LbaStrategy'] = $this->lbaStrategy;
        }
        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
        }
        if (null !== $this->userDomainName) {
            $res['UserDomainName'] = $this->userDomainName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateGtmInstanceGlobalConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertGroup'])) {
            $model->alertGroup = $map['AlertGroup'];
        }
        if (isset($map['CnameCustomDomainName'])) {
            $model->cnameCustomDomainName = $map['CnameCustomDomainName'];
        }
        if (isset($map['CnameMode'])) {
            $model->cnameMode = $map['CnameMode'];
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
        if (isset($map['LbaStrategy'])) {
            $model->lbaStrategy = $map['LbaStrategy'];
        }
        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }
        if (isset($map['UserDomainName'])) {
            $model->userDomainName = $map['UserDomainName'];
        }

        return $model;
    }
}
