<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class ModifyEpnInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $EPNInstanceId;

    /**
     * @var string
     */
    public $EPNInstanceName;

    /**
     * @var string
     */
    public $networkingModel;

    /**
     * @var int
     */
    public $internetMaxBandwidthOut;
    protected $_name = [
        'EPNInstanceId'           => 'EPNInstanceId',
        'EPNInstanceName'         => 'EPNInstanceName',
        'networkingModel'         => 'NetworkingModel',
        'internetMaxBandwidthOut' => 'InternetMaxBandwidthOut',
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
        if (isset($map['NetworkingModel'])) {
            $model->networkingModel = $map['NetworkingModel'];
        }
        if (isset($map['InternetMaxBandwidthOut'])) {
            $model->internetMaxBandwidthOut = $map['InternetMaxBandwidthOut'];
        }

        return $model;
    }
}
