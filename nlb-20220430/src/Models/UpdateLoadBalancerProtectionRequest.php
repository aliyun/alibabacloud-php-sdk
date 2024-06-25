<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models;

use AlibabaCloud\Tea\Model;

class UpdateLoadBalancerProtectionRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters.
     *
     * > If you do not specify this parameter, the system automatically uses the **request ID** as the **client token**. The **request ID** may be different for each request.
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to enable deletion protection. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $deletionProtectionEnabled;

    /**
     * @description The reason why deletion protection is enabled. The reason must be 2 to 128 characters in length, and can contain letters, digits, periods (.), underscores (_), and hyphens (-). The reason must start with a letter.
     *
     * > This parameter takes effect only when **DeletionProtectionEnabled** is set to **true**.
     * @example Instance_Is_Bound_By_Acceleration_Instance
     *
     * @var string
     */
    public $deletionProtectionReason;

    /**
     * @description Specifies whether to perform a dry run, without performing the actual request. Valid values:
     *
     *   **true**: performs only a dry run. The system checks the request for potential issues, including missing parameter values, incorrect request syntax, and service limits. If the request fails the dry run, an error message is returned. If the request passes the dry run, the `DryRunOperation` error code is returned.
     *   **false**(default): performs a dry run and performs the actual request. If the request passes the dry run, a 2xx HTTP status code is returned and the operation is performed.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The NLB instance ID.
     *
     * This parameter is required.
     * @example nlb-83ckzc8d4xlp8o****
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @description The reason why the configuration read-only mode is enabled. The reason must be 2 to 128 characters in length, and can contain letters, digits, periods (.), underscores (_), and hyphens (-). The reason must start with a letter.
     *
     * > This parameter takes effect only if **Status** is set to **ConsoleProtection**.
     * @example ConsoleProtection
     *
     * @var string
     */
    public $modificationProtectionReason;

    /**
     * @description Specifies whether to enable the configuration read-only mode. Valid values:
     *
     *   **NonProtection**: disables the configuration read-only mode. In this case, you cannot set the **ModificationProtectionReason** parameter. If you specify **ModificationProtectionReason**, the value is cleared.
     *   **ConsoleProtection**: enables the configuration read-only mode. In this case, you can specify **ModificationProtectionReason**.
     *
     * > If you set this parameter to **ConsoleProtection**, you cannot use the NLB console to modify instance configurations. However, you can call API operations to modify instance configurations.
     * @example ConsoleProtection
     *
     * @var string
     */
    public $modificationProtectionStatus;

    /**
     * @description The region ID of the NLB instance.
     *
     * You can call the [DescribeRegions](https://help.aliyun.com/document_detail/443657.html) operation to query the most recent region list.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clientToken'                  => 'ClientToken',
        'deletionProtectionEnabled'    => 'DeletionProtectionEnabled',
        'deletionProtectionReason'     => 'DeletionProtectionReason',
        'dryRun'                       => 'DryRun',
        'loadBalancerId'               => 'LoadBalancerId',
        'modificationProtectionReason' => 'ModificationProtectionReason',
        'modificationProtectionStatus' => 'ModificationProtectionStatus',
        'regionId'                     => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->deletionProtectionEnabled) {
            $res['DeletionProtectionEnabled'] = $this->deletionProtectionEnabled;
        }
        if (null !== $this->deletionProtectionReason) {
            $res['DeletionProtectionReason'] = $this->deletionProtectionReason;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->modificationProtectionReason) {
            $res['ModificationProtectionReason'] = $this->modificationProtectionReason;
        }
        if (null !== $this->modificationProtectionStatus) {
            $res['ModificationProtectionStatus'] = $this->modificationProtectionStatus;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateLoadBalancerProtectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DeletionProtectionEnabled'])) {
            $model->deletionProtectionEnabled = $map['DeletionProtectionEnabled'];
        }
        if (isset($map['DeletionProtectionReason'])) {
            $model->deletionProtectionReason = $map['DeletionProtectionReason'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['ModificationProtectionReason'])) {
            $model->modificationProtectionReason = $map['ModificationProtectionReason'];
        }
        if (isset($map['ModificationProtectionStatus'])) {
            $model->modificationProtectionStatus = $map['ModificationProtectionStatus'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
