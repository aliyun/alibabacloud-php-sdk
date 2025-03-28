<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Tea\Model;

class RollbackServiceInstanceResponseBody extends Model
{
    /**
     * @description Request ID.
     *
     * @example EE9EF87D-46F8-5AF6-9A65-6B034E204136
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Service instance ID.
     *
     * @example si-5289e1d6d0c14397881d
     *
     * @var string
     */
    public $serviceInstanceId;

    /**
     * @description The deployment status of the service instance. Possible values:
     *
     * - Created: Created
     *
     * - Deploying: Deploying
     *
     * - DeployedFailed: Deployment Failed
     *
     * - Deployed: Deployed
     *
     * - Upgrading: Upgrading
     *
     * - UpgradeRollbacking: Rolling Back
     *
     * - Deleting: Deleting
     *
     * - Deleted: Deleted
     *
     * - DeletedFailed: Deletion Failed
     *
     * @example UpgradeRollbacking
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'requestId' => 'RequestId',
        'serviceInstanceId' => 'ServiceInstanceId',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->serviceInstanceId) {
            $res['ServiceInstanceId'] = $this->serviceInstanceId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RollbackServiceInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ServiceInstanceId'])) {
            $model->serviceInstanceId = $map['ServiceInstanceId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
