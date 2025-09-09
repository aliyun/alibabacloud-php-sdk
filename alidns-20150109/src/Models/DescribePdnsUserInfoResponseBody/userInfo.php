<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribePdnsUserInfoResponseBody;

use AlibabaCloud\Dara\Model;

class userInfo extends Model
{
    /**
     * @var string
     */
    public $availableAccessSecurityType;

    /**
     * @var string
     */
    public $availableService;

    /**
     * @var int
     */
    public $pdnsId;

    /**
     * @var string
     */
    public $secretKey;

    /**
     * @var string
     */
    public $serviceType;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $statisticSwitchStatus;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
