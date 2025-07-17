<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingGroupDiagnoseDetailsResponseBody;

use AlibabaCloud\Tea\Model;

class details extends Model
{
    /**
     * @description The type of the diagnostic item. Valid values:
     *
     *   AccountArrearage: Checks whether your Alibaba Cloud account has overdue payments.
     *   AccountNotEnoughBalance: Checks whether the balance of your Alibaba Cloud account is sufficient.
     *   ElasticStrength: Checks whether the instance types that are specified in the scaling configuration are sufficient.
     *   VSwitch: Checks whether the vSwitch is available. If the specified vSwitch is deleted, specify an existing vSwitch for the scaling group.
     *   SecurityGroup: Checks whether the security group is available. If the specified security group is deleted, specify an existing security group for the scaling group.
     *   KeyPair: Checks whether the key pair is available. If the specified key pair is deleted, specify another key pair for the scaling group.
     *   SlbBackendServerQuota: Checks whether the number of ECS instances that are added to the default server group and the vServer groups of the SLB instances associated with the scaling group has reached the upper limit.
     *   AlbBackendServerQuota: Checks whether the number of ECS instances that are attached to the ALB instances of the scaling group has reached the upper limit.
     *   NlbBackendServerQuota: Checks whether the number of ECS instances that are attached to the NLB instances of the scaling group has reached the upper limit.
     *
     * @example SecurityGroup
     *
     * @var string
     */
    public $diagnoseType;

    /**
     * @description The error code of the diagnostic item. Valid values:
     *
     *   VSwitchIdNotFound: The vSwitch does not exist.
     *   SecurityGroupNotFound: The security group does not exist.
     *   KeyPairNotFound: The key pair does not exist.
     *   SlbBackendServerQuotaExceeded: The number of ECS instances that are added to the default server group and the vServer groups of the SLB instances associated with the scaling group has reached the upper limit.
     *   AlbBackendServerQuotaExceeded: The number of ECS instances that are attached to the ALB instances of the scaling group has reached the upper limit.
     *   NlbBackendServerQuotaExceeded: The number of ECS instances that are attached to the NLB instances of the scaling group has reached the upper limit.
     *   AccountArrearage: Your account has an overdue payment.
     *   AccountNotEnoughBalance: The balance of your Alibaba Cloud account is insufficient.
     *   ElasticStrengthAlert: The inventory levels are lower than required.
     *
     * @example AccountArrearage
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The resource ID corresponding to the diagnostic result.
     *
     * @example sg-280ih****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description Status of the diagnostic item. Possible values:
     *
     * - Normal: The diagnostic result is normal.
     *
     * - Warn: The diagnostic result is a warning.
     *
     * - Critical: The diagnostic result is critical.
     *
     * @example Normal
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'diagnoseType' => 'DiagnoseType',
        'errorCode' => 'ErrorCode',
        'resourceId' => 'ResourceId',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->diagnoseType) {
            $res['DiagnoseType'] = $this->diagnoseType;
        }
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return details
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiagnoseType'])) {
            $model->diagnoseType = $map['DiagnoseType'];
        }
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
