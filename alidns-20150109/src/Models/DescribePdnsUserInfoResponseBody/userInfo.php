<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribePdnsUserInfoResponseBody;

use AlibabaCloud\Tea\Model;

class userInfo extends Model
{
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
    public $serviceType;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $stoppedService;
    protected $_name = [
        'availableService' => 'AvailableService',
        'pdnsId'           => 'PdnsId',
        'serviceType'      => 'ServiceType',
        'state'            => 'State',
        'stoppedService'   => 'StoppedService',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->availableService) {
            $res['AvailableService'] = $this->availableService;
        }
        if (null !== $this->pdnsId) {
            $res['PdnsId'] = $this->pdnsId;
        }
        if (null !== $this->serviceType) {
            $res['ServiceType'] = $this->serviceType;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
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
        if (isset($map['AvailableService'])) {
            $model->availableService = $map['AvailableService'];
        }
        if (isset($map['PdnsId'])) {
            $model->pdnsId = $map['PdnsId'];
        }
        if (isset($map['ServiceType'])) {
            $model->serviceType = $map['ServiceType'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['StoppedService'])) {
            $model->stoppedService = $map['StoppedService'];
        }

        return $model;
    }
}
