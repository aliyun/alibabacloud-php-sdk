<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Tea\Model;

class ConnectKmsInstanceRequest extends Model
{
    /**
     * @description The provider of the KMS instance. Set the value to Aliyun.
     *
     * This parameter is required.
     * @example Aliyun
     *
     * @var string
     */
    public $KMProvider;

    /**
     * @description The ID of the KMS instance that you want to enable.
     *
     * This parameter is required.
     * @example kst-phzz64f722a1buamw0****
     *
     * @var string
     */
    public $kmsInstanceId;

    /**
     * @description The vSwitch in the two zones. The vSwitch must have at least one available IP address.
     *
     * This parameter is required.
     * @example vsw-bp1i512amda6d10a0****
     *
     * @var string
     */
    public $vSwitchIds;

    /**
     * @description The ID of the virtual private cloud (VPC) that is associated with the KMS instance.
     *
     * This parameter is required.
     * @example vpc-bp19z7cwmltad5dff****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The two zones for the KMS instance. Dual-zone deployment improves service availability and disaster recovery capabilities.
     *
     * This parameter is required.
     * @example cn-hangzhou-k,cn-hangzhou-j
     *
     * @var string
     */
    public $zoneIds;
    protected $_name = [
        'KMProvider'    => 'KMProvider',
        'kmsInstanceId' => 'KmsInstanceId',
        'vSwitchIds'    => 'VSwitchIds',
        'vpcId'         => 'VpcId',
        'zoneIds'       => 'ZoneIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->KMProvider) {
            $res['KMProvider'] = $this->KMProvider;
        }
        if (null !== $this->kmsInstanceId) {
            $res['KmsInstanceId'] = $this->kmsInstanceId;
        }
        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = $this->vSwitchIds;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->zoneIds) {
            $res['ZoneIds'] = $this->zoneIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConnectKmsInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KMProvider'])) {
            $model->KMProvider = $map['KMProvider'];
        }
        if (isset($map['KmsInstanceId'])) {
            $model->kmsInstanceId = $map['KmsInstanceId'];
        }
        if (isset($map['VSwitchIds'])) {
            $model->vSwitchIds = $map['VSwitchIds'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['ZoneIds'])) {
            $model->zoneIds = $map['ZoneIds'];
        }

        return $model;
    }
}
