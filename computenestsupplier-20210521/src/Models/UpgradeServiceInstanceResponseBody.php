<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Tea\Model;

class UpgradeServiceInstanceResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example F224E002-AB0E-5FD9-A87E-54AEE56F6CAE
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the service instance.
     *
     * @example si-5cbae874da0e47xxxxxx
     *
     * @var string
     */
    public $serviceInstanceId;

    /**
     * @description The deployment state of the service instance. Valid values:
     *
     *   Created
     *   Deploying
     *   DeployedFailed
     *   Deployed
     *   Upgrading
     *   Deleting
     *   Deleted
     *   DeletedFailed
     *
     * @example Created
     *
     * @var string
     */
    public $status;

    /**
     * @description The parameters required for the upgrade.
     *
     * @var string[]
     */
    public $upgradeRequiredParameters;
    protected $_name = [
        'requestId'                 => 'RequestId',
        'serviceInstanceId'         => 'ServiceInstanceId',
        'status'                    => 'Status',
        'upgradeRequiredParameters' => 'UpgradeRequiredParameters',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->upgradeRequiredParameters) {
            $res['UpgradeRequiredParameters'] = $this->upgradeRequiredParameters;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpgradeServiceInstanceResponseBody
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
        if (isset($map['UpgradeRequiredParameters'])) {
            if (!empty($map['UpgradeRequiredParameters'])) {
                $model->upgradeRequiredParameters = $map['UpgradeRequiredParameters'];
            }
        }

        return $model;
    }
}
