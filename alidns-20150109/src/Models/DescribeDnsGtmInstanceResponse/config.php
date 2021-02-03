<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmInstanceResponse;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmInstanceResponse\config\alertConfig;
use AlibabaCloud\Tea\Model;

class config extends Model
{
    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $cnameType;

    /**
     * @var string
     */
    public $publicUserDomainName;

    /**
     * @var string
     */
    public $publicCnameMode;

    /**
     * @var string
     */
    public $pubicZoneName;

    /**
     * @var int
     */
    public $ttl;

    /**
     * @var string
     */
    public $strategyMode;

    /**
     * @var string
     */
    public $alertGroup;

    /**
     * @var alertConfig
     */
    public $alertConfig;
    protected $_name = [
        'instanceName'         => 'InstanceName',
        'cnameType'            => 'CnameType',
        'publicUserDomainName' => 'PublicUserDomainName',
        'publicCnameMode'      => 'PublicCnameMode',
        'pubicZoneName'        => 'PubicZoneName',
        'ttl'                  => 'Ttl',
        'strategyMode'         => 'StrategyMode',
        'alertGroup'           => 'AlertGroup',
        'alertConfig'          => 'AlertConfig',
    ];

    public function validate()
    {
        Model::validateRequired('instanceName', $this->instanceName, true);
        Model::validateRequired('cnameType', $this->cnameType, true);
        Model::validateRequired('publicUserDomainName', $this->publicUserDomainName, true);
        Model::validateRequired('publicCnameMode', $this->publicCnameMode, true);
        Model::validateRequired('pubicZoneName', $this->pubicZoneName, true);
        Model::validateRequired('ttl', $this->ttl, true);
        Model::validateRequired('strategyMode', $this->strategyMode, true);
        Model::validateRequired('alertGroup', $this->alertGroup, true);
        Model::validateRequired('alertConfig', $this->alertConfig, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->cnameType) {
            $res['CnameType'] = $this->cnameType;
        }
        if (null !== $this->publicUserDomainName) {
            $res['PublicUserDomainName'] = $this->publicUserDomainName;
        }
        if (null !== $this->publicCnameMode) {
            $res['PublicCnameMode'] = $this->publicCnameMode;
        }
        if (null !== $this->pubicZoneName) {
            $res['PubicZoneName'] = $this->pubicZoneName;
        }
        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
        }
        if (null !== $this->strategyMode) {
            $res['StrategyMode'] = $this->strategyMode;
        }
        if (null !== $this->alertGroup) {
            $res['AlertGroup'] = $this->alertGroup;
        }
        if (null !== $this->alertConfig) {
            $res['AlertConfig'] = null !== $this->alertConfig ? $this->alertConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return config
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['CnameType'])) {
            $model->cnameType = $map['CnameType'];
        }
        if (isset($map['PublicUserDomainName'])) {
            $model->publicUserDomainName = $map['PublicUserDomainName'];
        }
        if (isset($map['PublicCnameMode'])) {
            $model->publicCnameMode = $map['PublicCnameMode'];
        }
        if (isset($map['PubicZoneName'])) {
            $model->pubicZoneName = $map['PubicZoneName'];
        }
        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }
        if (isset($map['StrategyMode'])) {
            $model->strategyMode = $map['StrategyMode'];
        }
        if (isset($map['AlertGroup'])) {
            $model->alertGroup = $map['AlertGroup'];
        }
        if (isset($map['AlertConfig'])) {
            $model->alertConfig = alertConfig::fromMap($map['AlertConfig']);
        }

        return $model;
    }
}
