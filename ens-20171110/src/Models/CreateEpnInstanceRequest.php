<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CreateEpnInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $EPNInstanceType;

    /**
     * @var string
     */
    public $EPNInstanceName;

    /**
     * @var string
     */
    public $internetChargeType;

    /**
     * @var string
     */
    public $networkingModel;

    /**
     * @var int
     */
    public $internetMaxBandwidthOut;
    protected $_name = [
        'EPNInstanceType'         => 'EPNInstanceType',
        'EPNInstanceName'         => 'EPNInstanceName',
        'internetChargeType'      => 'InternetChargeType',
        'networkingModel'         => 'NetworkingModel',
        'internetMaxBandwidthOut' => 'InternetMaxBandwidthOut',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->EPNInstanceType) {
            $res['EPNInstanceType'] = $this->EPNInstanceType;
        }
        if (null !== $this->EPNInstanceName) {
            $res['EPNInstanceName'] = $this->EPNInstanceName;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->networkingModel) {
            $res['NetworkingModel'] = $this->networkingModel;
        }
        if (null !== $this->internetMaxBandwidthOut) {
            $res['InternetMaxBandwidthOut'] = $this->internetMaxBandwidthOut;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEpnInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EPNInstanceType'])) {
            $model->EPNInstanceType = $map['EPNInstanceType'];
        }
        if (isset($map['EPNInstanceName'])) {
            $model->EPNInstanceName = $map['EPNInstanceName'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['NetworkingModel'])) {
            $model->networkingModel = $map['NetworkingModel'];
        }
        if (isset($map['InternetMaxBandwidthOut'])) {
            $model->internetMaxBandwidthOut = $map['InternetMaxBandwidthOut'];
        }

        return $model;
    }
}
