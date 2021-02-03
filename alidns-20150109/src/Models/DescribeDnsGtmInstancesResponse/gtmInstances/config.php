<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmInstancesResponse\gtmInstances;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmInstancesResponse\gtmInstances\config\alertConfig;
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
    public $publicZoneName;

    /**
     * @var int
     */
    public $ttl;

    /**
     * @var string
     */
    public $alertGroup;

    /**
     * @var string
     */
    public $strategyMode;

    /**
     * @var alertConfig[]
     */
    public $alertConfig;
    protected $_name = [
        'instanceName'         => 'InstanceName',
        'cnameType'            => 'CnameType',
        'publicUserDomainName' => 'PublicUserDomainName',
        'publicCnameMode'      => 'PublicCnameMode',
        'publicZoneName'       => 'PublicZoneName',
        'ttl'                  => 'Ttl',
        'alertGroup'           => 'AlertGroup',
        'strategyMode'         => 'StrategyMode',
        'alertConfig'          => 'AlertConfig',
    ];

    public function validate()
    {
        Model::validateRequired('instanceName', $this->instanceName, true);
        Model::validateRequired('cnameType', $this->cnameType, true);
        Model::validateRequired('publicUserDomainName', $this->publicUserDomainName, true);
        Model::validateRequired('publicCnameMode', $this->publicCnameMode, true);
        Model::validateRequired('publicZoneName', $this->publicZoneName, true);
        Model::validateRequired('ttl', $this->ttl, true);
        Model::validateRequired('alertGroup', $this->alertGroup, true);
        Model::validateRequired('strategyMode', $this->strategyMode, true);
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
        if (null !== $this->publicZoneName) {
            $res['PublicZoneName'] = $this->publicZoneName;
        }
        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
        }
        if (null !== $this->alertGroup) {
            $res['AlertGroup'] = $this->alertGroup;
        }
        if (null !== $this->strategyMode) {
            $res['StrategyMode'] = $this->strategyMode;
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
        if (isset($map['PublicZoneName'])) {
            $model->publicZoneName = $map['PublicZoneName'];
        }
        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }
        if (isset($map['AlertGroup'])) {
            $model->alertGroup = $map['AlertGroup'];
        }
        if (isset($map['StrategyMode'])) {
            $model->strategyMode = $map['StrategyMode'];
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
