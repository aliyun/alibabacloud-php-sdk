<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class ModifyEpnInstanceRequest extends Model
{
    /**
     * @description The ID of the EPN instance.
     *
     * This parameter is required.
     * @example epn-****
     *
     * @var string
     */
    public $EPNInstanceId;

    /**
     * @description The name of the EPN instance.
     *
     * @example ens_test_epn
     *
     * @var string
     */
    public $EPNInstanceName;

    /**
     * @description The maximum outbound public bandwidth. Unit: Mbit/s. Valid values: 1 Mbit/s to 100 Mbit/s.
     *
     * @example 10
     *
     * @var int
     */
    public $internetMaxBandwidthOut;

    /**
     * @description The networking mode. Valid values:
     *
     *   **SpeedUp**: Intelligent acceleration network (Internet).
     *   **Connection**: Internal network.
     *   **SpeedUpAndConnection**: Intelligent acceleration network and internal network.
     *
     * >  The internal network supports only **Connection** and **SpeedUpAndConnection**.
     * @example SpeedUp
     *
     * @var string
     */
    public $networkingModel;
    protected $_name = [
        'EPNInstanceId'           => 'EPNInstanceId',
        'EPNInstanceName'         => 'EPNInstanceName',
        'internetMaxBandwidthOut' => 'InternetMaxBandwidthOut',
        'networkingModel'         => 'NetworkingModel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->EPNInstanceId) {
            $res['EPNInstanceId'] = $this->EPNInstanceId;
        }
        if (null !== $this->EPNInstanceName) {
            $res['EPNInstanceName'] = $this->EPNInstanceName;
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
     * @return ModifyEpnInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EPNInstanceId'])) {
            $model->EPNInstanceId = $map['EPNInstanceId'];
        }
        if (isset($map['EPNInstanceName'])) {
            $model->EPNInstanceName = $map['EPNInstanceName'];
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
