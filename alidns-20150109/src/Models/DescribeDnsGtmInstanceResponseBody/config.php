<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmInstanceResponseBody;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmInstanceResponseBody\config\alertConfig;
use AlibabaCloud\Tea\Model;

class config extends Model
{
    /**
     * @description The alert notification method.
     *
     * @var alertConfig
     */
    public $alertConfig;

    /**
     * @description The name of the alert group.
     *
     * @example alertgroup1
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
     * @description The name of the instance.
     *
     * @example instancetest1
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The domain name that is used to access the instance over the Internet.
     *
     * @example test.rr.gtm-003.com
     *
     * @var string
     */
    public $pubicZoneName;

    /**
     * @description Indicates whether a custom CNAME domain name or a CNAME domain name assigned by the system is used to access the instance over the Internet. Valid values:
     *
     *   CUSTOM: A custom CNAME domain name is used.
     *   SYSTEM_ASSIGN: A CNAME domain name assigned by the system is used.
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
     * @description The type of the access policy. Valid values:
     *
     *   LATENCY: Latency-based
     *   GEO: Geographical location-based
     *
     * @example GEO
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
        'pubicZoneName'        => 'PubicZoneName',
        'publicCnameMode'      => 'PublicCnameMode',
        'publicRr'             => 'PublicRr',
        'publicUserDomainName' => 'PublicUserDomainName',
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
            $res['AlertConfig'] = null !== $this->alertConfig ? $this->alertConfig->toMap() : null;
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
        if (null !== $this->pubicZoneName) {
            $res['PubicZoneName'] = $this->pubicZoneName;
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
            $model->alertConfig = alertConfig::fromMap($map['AlertConfig']);
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
        if (isset($map['PubicZoneName'])) {
            $model->pubicZoneName = $map['PubicZoneName'];
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
        if (isset($map['StrategyMode'])) {
            $model->strategyMode = $map['StrategyMode'];
        }
        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }

        return $model;
    }
}
