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
     * @var string
     */
    public $alertGroup;

    /**
     * @var string
     */
    public $cnameType;

    /**
     * @var bool
     */
    public $forceUpdate;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $publicCnameMode;

    /**
     * @var string
     */
    public $publicRr;

    /**
     * @var string
     */
    public $publicUserDomainName;

    /**
     * @var string
     */
    public $publicZoneName;

    /**
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
