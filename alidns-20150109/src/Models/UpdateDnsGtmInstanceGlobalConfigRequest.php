<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\UpdateDnsGtmInstanceGlobalConfigRequest\alertConfig;
use AlibabaCloud\Tea\Model;

class UpdateDnsGtmInstanceGlobalConfigRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

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
    public $publicCnameMode;

    /**
     * @var string
     */
    public $publicUserDomainName;

    /**
     * @var string
     */
    public $publicZoneName;

    /**
     * @var string
     */
    public $alertGroup;

    /**
     * @var string
     */
    public $cnameType;

    /**
     * @var alertConfig[]
     */
    public $alertConfig;
    protected $_name = [
        'lang'                 => 'Lang',
        'instanceId'           => 'InstanceId',
        'instanceName'         => 'InstanceName',
        'ttl'                  => 'Ttl',
        'publicCnameMode'      => 'PublicCnameMode',
        'publicUserDomainName' => 'PublicUserDomainName',
        'publicZoneName'       => 'PublicZoneName',
        'alertGroup'           => 'AlertGroup',
        'cnameType'            => 'CnameType',
        'alertConfig'          => 'AlertConfig',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
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
        if (null !== $this->publicCnameMode) {
            $res['PublicCnameMode'] = $this->publicCnameMode;
        }
        if (null !== $this->publicUserDomainName) {
            $res['PublicUserDomainName'] = $this->publicUserDomainName;
        }
        if (null !== $this->publicZoneName) {
            $res['PublicZoneName'] = $this->publicZoneName;
        }
        if (null !== $this->alertGroup) {
            $res['AlertGroup'] = $this->alertGroup;
        }
        if (null !== $this->cnameType) {
            $res['CnameType'] = $this->cnameType;
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
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
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
        if (isset($map['PublicCnameMode'])) {
            $model->publicCnameMode = $map['PublicCnameMode'];
        }
        if (isset($map['PublicUserDomainName'])) {
            $model->publicUserDomainName = $map['PublicUserDomainName'];
        }
        if (isset($map['PublicZoneName'])) {
            $model->publicZoneName = $map['PublicZoneName'];
        }
        if (isset($map['AlertGroup'])) {
            $model->alertGroup = $map['AlertGroup'];
        }
        if (isset($map['CnameType'])) {
            $model->cnameType = $map['CnameType'];
        }
        if (isset($map['AlertConfig'])) {
            if (!empty($map['AlertConfig'])) {
                $model->alertConfig = [];
                $n                  = 0;
                foreach ($map['AlertConfig'] as $item) {
                    $model->alertConfig[$n++] = null !== $item ? alertConfig::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
