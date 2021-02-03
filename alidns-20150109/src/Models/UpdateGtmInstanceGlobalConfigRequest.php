<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class UpdateGtmInstanceGlobalConfigRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $userClientIp;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var int
     */
    public $ttl;

    /**
     * @var string
     */
    public $userDomainName;

    /**
     * @var string
     */
    public $lbaStrategy;

    /**
     * @var string
     */
    public $alertGroup;

    /**
     * @var string
     */
    public $cnameMode;

    /**
     * @var string
     */
    public $cnameCustomDomainName;
    protected $_name = [
        'lang'                  => 'Lang',
        'userClientIp'          => 'UserClientIp',
        'instanceId'            => 'InstanceId',
        'instanceName'          => 'InstanceName',
        'ttl'                   => 'Ttl',
        'userDomainName'        => 'UserDomainName',
        'lbaStrategy'           => 'LbaStrategy',
        'alertGroup'            => 'AlertGroup',
        'cnameMode'             => 'CnameMode',
        'cnameCustomDomainName' => 'CnameCustomDomainName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
        }
        if (null !== $this->userDomainName) {
            $res['UserDomainName'] = $this->userDomainName;
        }
        if (null !== $this->lbaStrategy) {
            $res['LbaStrategy'] = $this->lbaStrategy;
        }
        if (null !== $this->alertGroup) {
            $res['AlertGroup'] = $this->alertGroup;
        }
        if (null !== $this->cnameMode) {
            $res['CnameMode'] = $this->cnameMode;
        }
        if (null !== $this->cnameCustomDomainName) {
            $res['CnameCustomDomainName'] = $this->cnameCustomDomainName;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }
        if (isset($map['UserDomainName'])) {
            $model->userDomainName = $map['UserDomainName'];
        }
        if (isset($map['LbaStrategy'])) {
            $model->lbaStrategy = $map['LbaStrategy'];
        }
        if (isset($map['AlertGroup'])) {
            $model->alertGroup = $map['AlertGroup'];
        }
        if (isset($map['CnameMode'])) {
            $model->cnameMode = $map['CnameMode'];
        }
        if (isset($map['CnameCustomDomainName'])) {
            $model->cnameCustomDomainName = $map['CnameCustomDomainName'];
        }

        return $model;
    }
}
