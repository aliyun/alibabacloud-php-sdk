<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models;

use AlibabaCloud\Tea\Model;

class ModifyIpDefenseThresholdRequest extends Model
{
    /**
     * @description Specifies the traffic scrubbing threshold. Unit: Mbit/s. The traffic scrubbing threshold cannot exceed the peak inbound or outbound Internet traffic, whichever is larger, of the asset.
     *
     * You can use the monitoring tool that is provided by the asset to query the Internet traffic of the asset:
     *
     *   For more information about how to query the Internet traffic of an ECS instance, see [Query monitoring information of an instance](https://help.aliyun.com/document_detail/25482.html).
     *   For more information about how to query the number of packets of an SLB instance, see [View monitoring data in the console](https://help.aliyun.com/document_detail/85982.html).
     *
     * @example 100
     *
     * @var int
     */
    public $bps;

    /**
     * @description The region ID of the asset.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $ddosRegionId;

    /**
     * @description The ID of the asset.
     *
     * This parameter is required.
     * @example i-uf6idy3c57psf7vu****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The type of the asset. Valid values:
     *
     *   **ecs**: ECS instance
     *   **slb**: SLB instance
     *   **eip**: EIP
     *
     * This parameter is required.
     * @example ecs
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The IP address of the asset.
     *
     * This parameter is required.
     * @example 192.0.XX.XX
     *
     * @var string
     */
    public $internetIp;

    /**
     * @description Specifies whether to automatically adjust the scrubbing threshold based on the traffic load on the asset. Valid values:
     *
     *   **true**: automatically adjusts the scrubbing threshold. You do not need to configure the **Bps** and **Pps** parameters.
     *   **false**: The scrubbing threshold is not automatically adjusted. You must configure the **Bps** and **Pps** parameters. This is the default value.
     *
     * @example false
     *
     * @var bool
     */
    public $isAuto;

    /**
     * @description Specifies the packet scrubbing threshold. Unit: packets per second (pps).
     *
     * The packet scrubbing threshold cannot exceed the peak number of inbound or outbound packets, whichever is larger, of the asset. You can use the monitoring tool that is provided by the asset to query the number of packets of the asset:
     *
     *   For more information about how to query the number of packets of an ECS instance, see [Query monitoring information of an instance](https://help.aliyun.com/document_detail/25482.html).
     *   For more information about how to query the number of packets of an SLB instance, see [View monitoring data in the console](https://help.aliyun.com/document_detail/85982.html).
     *
     * @example 70000
     *
     * @var int
     */
    public $pps;
    protected $_name = [
        'bps'          => 'Bps',
        'ddosRegionId' => 'DdosRegionId',
        'instanceId'   => 'InstanceId',
        'instanceType' => 'InstanceType',
        'internetIp'   => 'InternetIp',
        'isAuto'       => 'IsAuto',
        'pps'          => 'Pps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bps) {
            $res['Bps'] = $this->bps;
        }
        if (null !== $this->ddosRegionId) {
            $res['DdosRegionId'] = $this->ddosRegionId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->internetIp) {
            $res['InternetIp'] = $this->internetIp;
        }
        if (null !== $this->isAuto) {
            $res['IsAuto'] = $this->isAuto;
        }
        if (null !== $this->pps) {
            $res['Pps'] = $this->pps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyIpDefenseThresholdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bps'])) {
            $model->bps = $map['Bps'];
        }
        if (isset($map['DdosRegionId'])) {
            $model->ddosRegionId = $map['DdosRegionId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['InternetIp'])) {
            $model->internetIp = $map['InternetIp'];
        }
        if (isset($map['IsAuto'])) {
            $model->isAuto = $map['IsAuto'];
        }
        if (isset($map['Pps'])) {
            $model->pps = $map['Pps'];
        }

        return $model;
    }
}
