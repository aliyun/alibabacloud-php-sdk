<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribePdnsUserInfoResponseBody;

use AlibabaCloud\Tea\Model;

class userInfo extends Model
{
    /**
     * @description The enabled access security types.
     *
     * @example SECURE
     *
     * @var string
     */
    public $availableAccessSecurityType;

    /**
     * @description The enabled public recursive DNS service.
     *
     * @example HTTP,HTTPS
     *
     * @var string
     */
    public $availableService;

    /**
     * @description The configuration ID of the users in public recursive DNS.
     *
     * @example 10001
     *
     * @var int
     */
    public $pdnsId;

    /**
     * @description The SecretKey configured for a UDP-based CIDR block.
     *
     * @example 1c092d715b7a48de
     *
     * @var string
     */
    public $secretKey;

    /**
     * @description The type of the public recursive DNS service.
     *
     * @example normal
     *
     * @var string
     */
    public $serviceType;

    /**
     * @description The status of the public recursive DNS service.
     *
     * @example AVAILABLE
     *
     * @var string
     */
    public $state;

    /**
     * @description The status of the traffic analysis switch for the user in public recursive DNS service.
     *
     * @example CLOSED
     *
     * @var string
     */
    public $statisticSwitchStatus;

    /**
     * @description The disabled public recursive DNS service.
     *
     * @var string
     */
    public $stoppedService;
    protected $_name = [
        'availableAccessSecurityType' => 'AvailableAccessSecurityType',
        'availableService' => 'AvailableService',
        'pdnsId' => 'PdnsId',
        'secretKey' => 'SecretKey',
        'serviceType' => 'ServiceType',
        'state' => 'State',
        'statisticSwitchStatus' => 'StatisticSwitchStatus',
        'stoppedService' => 'StoppedService',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableAccessSecurityType) {
            $res['AvailableAccessSecurityType'] = $this->availableAccessSecurityType;
        }
        if (null !== $this->availableService) {
            $res['AvailableService'] = $this->availableService;
        }
        if (null !== $this->pdnsId) {
            $res['PdnsId'] = $this->pdnsId;
        }
        if (null !== $this->secretKey) {
            $res['SecretKey'] = $this->secretKey;
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->statisticSwitchStatus) {
            $res['StatisticSwitchStatus'] = $this->statisticSwitchStatus;
        }
        if (null !== $this->stoppedService) {
            $res['StoppedService'] = $this->stoppedService;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AvailableAccessSecurityType'])) {
            $model->availableAccessSecurityType = $map['AvailableAccessSecurityType'];
        }
        if (isset($map['AvailableService'])) {
            $model->availableService = $map['AvailableService'];
        }
        if (isset($map['PdnsId'])) {
            $model->pdnsId = $map['PdnsId'];
        }
        if (isset($map['SecretKey'])) {
            $model->secretKey = $map['SecretKey'];
        }
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['StatisticSwitchStatus'])) {
            $model->statisticSwitchStatus = $map['StatisticSwitchStatus'];
        }
        if (isset($map['StoppedService'])) {
            $model->stoppedService = $map['StoppedService'];
        }

        return $model;
    }
}
