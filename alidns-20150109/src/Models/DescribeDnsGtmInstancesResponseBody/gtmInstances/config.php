<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmInstancesResponseBody\gtmInstances;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmInstancesResponseBody\gtmInstances\config\alertConfig;
use AlibabaCloud\Tea\Model;

class config extends Model
{
    /**
     * @description The alert notification methods.
     *
     * @var alertConfig[]
     */
    public $alertConfig;

    /**
     * @description The alert group.
     *
     * @example testgroup
     *
     * @var string
     */
    public $alertGroup;

    /**
     * @description The access type of the CNAME domain name.
     *
     *   The value was set to PUBLIC, which indicates Internet access.
     *
     * @example public
     *
     * @var string
     */
    public $cnameType;

    /**
     * @description The name of the instance.
     *
     * @example instanceTest
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description Indicates whether a custom CNAME domain name or a CNAME domain name assigned by the system is used to access GTM over the Internet. Valid values:
     *
     *   CUSTOM: a custom CNAME domain name
     *   SYSTEM_ASSIGN: a CNAME domain name assigned by the system
     *
     * @example custom
     *
     * @var string
     */
    public $publicCnameMode;

    /**
     * @example test.rr
     *
     * @var string
     */
    public $publicRr;

    /**
     * @description The website domain name that the user uses on the Internet.
     *
     * @example example.com
     *
     * @var string
     */
    public $publicUserDomainName;

    /**
     * @description The domain name that is used to access GTM over the Internet.
     *
     * @example test.rr.gtm-003.com
     *
     * @var string
     */
    public $publicZoneName;

    /**
     * @description The type of the access policy. Valid values:
     *
     *   LATENCY: latency-based
     *   GEO: geographical location-based
     *
     * @example geo
     *
     * @var string
     */
    public $strategyMode;

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
        'instanceName'         => 'InstanceName',
        'publicCnameMode'      => 'PublicCnameMode',
        'publicRr'             => 'PublicRr',
        'publicUserDomainName' => 'PublicUserDomainName',
        'publicZoneName'       => 'PublicZoneName',
        'strategyMode'         => 'StrategyMode',
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
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
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
        if (null !== $this->strategyMode) {
            $res['StrategyMode'] = $this->strategyMode;
        }
        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
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
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
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
        if (isset($map['StrategyMode'])) {
            $model->strategyMode = $map['StrategyMode'];
        }
        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }

        return $model;
    }
}
