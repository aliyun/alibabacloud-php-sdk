<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models\GetDBInstanceConnectivityDiagnosisResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The exception detection items:
     *
     *   **SRC_IP_NOT_IN_USER_WHITELIST**: The source IP address is not added to the whitelist of the user.
     *   **VIP_NOT_EXISTS**: The Application Load Balancer (ALB) instance corresponding to the virtual IP address (VIP) does not exist.
     *   **RS_NOT_EXISTS**: The resource sharing (RS) is not properly mounted.
     *   **VIP_TUNNEL_ID_NOT_CONSISTENT**: The tunnel ID used by the VIP of the virtual private cloud (VPC) type is different from the tunnel ID of the VPC.
     *   **VIP_VPC_CLOUD_INSTANCE_NOT_EXISTS**: The VIP of the VPC type does not exist.
     *   **VIP_IS_NOT_NGLB**: The NGLB mode is disabled for the VIP.
     *   **CUSTINS_NOT_ASSOCIATE_ECS_SECURITY_GROUP**: No security group is associated with the instance.
     *   **SRC_IP_NOT_IN_USER_WHITELIST**: The source IP address is not added to the whitelist of the user.
     *   **SRC_IP_NOT_IN_ADMIN_WHITELIST**: The source IP address is not added to the whitelist of the instance.
     *   **SRC_IP_NOT_IN_ECS_SECURITY_GROUP**: The source IP address is not added to the security group that is associated with the instance.
     *   **VPC_INSTANCE_IP_NOT_WORKING_STATUS**: The IP address in the VPC is in an abnormal state.
     *
     * @example SRC_IP_NOT_IN_USER_WHITELIST
     *
     * @var string
     */
    public $connCheckErrorCode;

    /**
     * @description The details of the exception detection.
     *
     * @example Src ip:47.110.180.62 not in user whitelist
     *
     * @var string
     */
    public $connCheckErrorMessage;

    /**
     * @description The type of the exception:
     *
     *   **0**: an exception that can be handled by the user.
     *   **1**: an exception that can be handled by a technical engineer.
     *
     * @example 0
     *
     * @var string
     */
    public $failType;

    /**
     * @description The instance ID.
     *
     * @example rm-2ze8g2am97624****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Indicates whether the connectivity test was passed:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'connCheckErrorCode'    => 'connCheckErrorCode',
        'connCheckErrorMessage' => 'connCheckErrorMessage',
        'failType'              => 'failType',
        'instanceId'            => 'instanceId',
        'success'               => 'success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connCheckErrorCode) {
            $res['connCheckErrorCode'] = $this->connCheckErrorCode;
        }
        if (null !== $this->connCheckErrorMessage) {
            $res['connCheckErrorMessage'] = $this->connCheckErrorMessage;
        }
        if (null !== $this->failType) {
            $res['failType'] = $this->failType;
        }
        if (null !== $this->instanceId) {
            $res['instanceId'] = $this->instanceId;
        }
        if (null !== $this->success) {
            $res['success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['connCheckErrorCode'])) {
            $model->connCheckErrorCode = $map['connCheckErrorCode'];
        }
        if (isset($map['connCheckErrorMessage'])) {
            $model->connCheckErrorMessage = $map['connCheckErrorMessage'];
        }
        if (isset($map['failType'])) {
            $model->failType = $map['failType'];
        }
        if (isset($map['instanceId'])) {
            $model->instanceId = $map['instanceId'];
        }
        if (isset($map['success'])) {
            $model->success = $map['success'];
        }

        return $model;
    }
}
