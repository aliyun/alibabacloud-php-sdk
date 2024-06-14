<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models\GetKmsInstanceResponseBody;

use AlibabaCloud\SDK\Kms\V20160120\Models\GetKmsInstanceResponseBody\kmsInstance\bindVpcs;
use AlibabaCloud\Tea\Model;

class kmsInstance extends Model
{
    /**
     * @description A list of associated VPCs.
     *
     * >  If your self-managed applications are deployed in multiple VPCs in the same region, you can associate VPCs with the KMS instance beyond the VPC that you specify when you enable the KMS instance. The VPCs can belong to the same Alibaba Cloud account or different Alibaba Cloud accounts. After the configuration is complete, self-managed applications in the VPCs can access the specified KMS instance.
     * @var bindVpcs
     */
    public $bindVpcs;

    /**
     * @description The content of the certificate authority (CA) certificate of the KMS instance.
     *
     * @example -----BEGIN CERTIFICATE-----\\r\\nMIIDuzCCAqOgAwIBAgIJALTKwWAjvbMiMA0GCSqGSIb3DQEBCwUAMHQxCzAJBgNV****-----END CERTIFICATE-----
     *
     * @var string
     */
    public $caCertificateChainPem;

    /**
     * @description The time when the KMS instance is created.
     *
     * @example 2023-09-05T12:44:20Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The expiration time of the KMS instance.
     *
     * @example 2023-10-05T16:00:00Z
     *
     * @var string
     */
    public $endDate;

    /**
     * @description The ID of the KMS instance.
     *
     * @example kst-bjj62f5ba3dnpb6v8****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The name of the KMS instance.
     *
     * @example kst-bjj62f5ba3dnpb6v8****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The number of keys that can be created for the KMS instance.
     *
     * @example 1000
     *
     * @var int
     */
    public $keyNum;

    /**
     * @description The number of secrets that can be created for the KMS instance.
     *
     * @example 10
     *
     * @var string
     */
    public $secretNum;

    /**
     * @description The computing performance of the KMS instance.
     *
     * @example 1000
     *
     * @var int
     */
    public $spec;

    /**
     * @description The time when the KMS instance is enabled.
     *
     * @example 2023-09-05T12:44:19Z
     *
     * @var string
     */
    public $startDate;

    /**
     * @description The status of the KMS instance. Valid values:
     *
     *   Uninitialized: The KMS instance is not enabled.
     *   Connecting: The KMS instance is being connected.
     *   Connected: The KMS instance is enabled.
     *   Disconnected: The KMS instance is disconnected.
     *   Error: The KMS instance is abnormal.
     *
     * @example Connected
     *
     * @var string
     */
    public $status;

    /**
     * @description The virtual private cloud (VPC) with which the KMS instance is associated.
     *
     * @example vpc-bp19z7cwmltad5dff****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The access management quota for the KMS instance.
     *
     * @example 5
     *
     * @var int
     */
    public $vpcNum;

    /**
     * @description The vSwitch in the VPC.
     *
     * @example vsw-bp1i512amda6d10a0****
     *
     * @var string
     */
    public $vswitchIds;

    /**
     * @description The zone with which the KMS instance is associated.
     *
     * @example "cn-hangzhou-k",       "cn-hangzhou-j"
     *
     * @var string
     */
    public $zoneIds;
    protected $_name = [
        'bindVpcs'              => 'BindVpcs',
        'caCertificateChainPem' => 'CaCertificateChainPem',
        'createTime'            => 'CreateTime',
        'endDate'               => 'EndDate',
        'instanceId'            => 'InstanceId',
        'instanceName'          => 'InstanceName',
        'keyNum'                => 'KeyNum',
        'secretNum'             => 'SecretNum',
        'spec'                  => 'Spec',
        'startDate'             => 'StartDate',
        'status'                => 'Status',
        'vpcId'                 => 'VpcId',
        'vpcNum'                => 'VpcNum',
        'vswitchIds'            => 'VswitchIds',
        'zoneIds'               => 'ZoneIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindVpcs) {
            $res['BindVpcs'] = null !== $this->bindVpcs ? $this->bindVpcs->toMap() : null;
        }
        if (null !== $this->caCertificateChainPem) {
            $res['CaCertificateChainPem'] = $this->caCertificateChainPem;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->keyNum) {
            $res['KeyNum'] = $this->keyNum;
        }
        if (null !== $this->secretNum) {
            $res['SecretNum'] = $this->secretNum;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vpcNum) {
            $res['VpcNum'] = $this->vpcNum;
        }
        if (null !== $this->vswitchIds) {
            $res['VswitchIds'] = $this->vswitchIds;
        }
        if (null !== $this->zoneIds) {
            $res['ZoneIds'] = $this->zoneIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return kmsInstance
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindVpcs'])) {
            $model->bindVpcs = bindVpcs::fromMap($map['BindVpcs']);
        }
        if (isset($map['CaCertificateChainPem'])) {
            $model->caCertificateChainPem = $map['CaCertificateChainPem'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['KeyNum'])) {
            $model->keyNum = $map['KeyNum'];
        }
        if (isset($map['SecretNum'])) {
            $model->secretNum = $map['SecretNum'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VpcNum'])) {
            $model->vpcNum = $map['VpcNum'];
        }
        if (isset($map['VswitchIds'])) {
            $model->vswitchIds = $map['VswitchIds'];
        }
        if (isset($map['ZoneIds'])) {
            $model->zoneIds = $map['ZoneIds'];
        }

        return $model;
    }
}
