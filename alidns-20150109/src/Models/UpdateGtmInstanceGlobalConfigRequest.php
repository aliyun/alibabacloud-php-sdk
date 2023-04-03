<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class UpdateGtmInstanceGlobalConfigRequest extends Model
{
    /**
     * @description The alert group of the GTM instance. Currently, only one alert group is supported.
     *
     * >  This parameter is required for the first update, but is optional for later updates.
     * @var string
     */
    public $alertGroup;

    /**
     * @description The CNAME record of a domain name, which must be the primary domain name. When **CnameMode** is **CUSTOM**, this parameter is required for access.
     *
     * @example www.example.com
     *
     * @var string
     */
    public $cnameCustomDomainName;

    /**
     * @description Specifies whether the CNAME record is user-defined or automatically assigned by the system. Valid values:
     *
     *   **SYSTEM_ASSIGN**: Assigned by the system
     *   **CUSTOM**: User-defined
     *
     * @example SYSTEM_ASSIGN
     *
     * @var string
     */
    public $cnameMode;

    /**
     * @description The ID of the GTM instance whose configuration you want to modify.
     *
     * @example instance1
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the GTM instance.
     *
     * >  This parameter is required for the first update, but is not required for later updates.
     * @var string
     */
    public $instanceName;

    /**
     * @description The language used by the user.
     *
     * @example en
     *
     * @var string
     */
    public $lang;

    /**
     * @description The load balancing policy. Valid values:
     *
     *   **ALL_RR**: Load balancing
     *
     *   **RATIO**: Weighted round robin
     *
     * > This parameter is required for the first update, but is optional for later updates.
     * @example RATIO
     *
     * @var string
     */
    public $lbaStrategy;

    /**
     * @description The time when the modification takes effect.
     *
     * @example 60
     *
     * @var int
     */
    public $ttl;

    /**
     * @description The primary domain name.
     *
     * >  This parameter is required for the first update, but is optional for later updates.
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
