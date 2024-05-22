<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CreateEpnInstanceRequest extends Model
{
    /**
     * @description The name of the EPN instance.
     *
     * @example test EPNInstanceName
     *
     * @var string
     */
    public $EPNInstanceName;

    /**
     * @description The type of the EPN instance. Set the value to **EdgeToEdge**.
     *
     * This parameter is required.
     * @example EdgeToEdge
     *
     * @var string
     */
    public $EPNInstanceType;

    /**
     * @description The billing method for network usage. Valid values:
     *
     *   **BandwidthByDay**: Pay by daily peak bandwidth.
     *   **95BandwidthByMonth**: Pay by monthly 95th percentile bandwidth.
     *   **PayByBandwidth4thMonth**: Pay by monthly fourth peak bandwidth.
     *   **PayByBandwidth**: Pay by fixed bandwidth.
     *
     * This parameter is required.
     * @example BandwidthByDay
     *
     * @var string
     */
    public $internetChargeType;

    /**
     * @description The maximum outbound public bandwidth. Unit: Mbit/s. Valid values: 1 to 100.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $internetMaxBandwidthOut;

    /**
     * @description The networking mode. Valid values:
     *
     *   **SpeedUp**: intelligent acceleration network (Internet)
     *   **Connection**: internal network
     *   **SpeedUpAndConnection**: intelligent acceleration network and internal network
     *
     * This parameter is required.
     * @example SpeedUp
     *
     * @var string
     */
    public $networkingModel;
    protected $_name = [
        'EPNInstanceName'         => 'EPNInstanceName',
        'EPNInstanceType'         => 'EPNInstanceType',
        'internetChargeType'      => 'InternetChargeType',
        'internetMaxBandwidthOut' => 'InternetMaxBandwidthOut',
        'networkingModel'         => 'NetworkingModel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->EPNInstanceName) {
            $res['EPNInstanceName'] = $this->EPNInstanceName;
        }
        if (null !== $this->EPNInstanceType) {
            $res['EPNInstanceType'] = $this->EPNInstanceType;
        }
        if (null !== $this->internetChargeType) {
            $res['InternetChargeType'] = $this->internetChargeType;
        }
        if (null !== $this->internetMaxBandwidthOut) {
            $res['InternetMaxBandwidthOut'] = $this->internetMaxBandwidthOut;
        }
        if (null !== $this->networkingModel) {
            $res['NetworkingModel'] = $this->networkingModel;
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
        if (isset($map['EPNInstanceName'])) {
            $model->EPNInstanceName = $map['EPNInstanceName'];
        }
        if (isset($map['EPNInstanceType'])) {
            $model->EPNInstanceType = $map['EPNInstanceType'];
        }
        if (isset($map['InternetChargeType'])) {
            $model->internetChargeType = $map['InternetChargeType'];
        }
        if (isset($map['InternetMaxBandwidthOut'])) {
            $model->internetMaxBandwidthOut = $map['InternetMaxBandwidthOut'];
        }
        if (isset($map['NetworkingModel'])) {
            $model->networkingModel = $map['NetworkingModel'];
        }

        return $model;
    }
}
