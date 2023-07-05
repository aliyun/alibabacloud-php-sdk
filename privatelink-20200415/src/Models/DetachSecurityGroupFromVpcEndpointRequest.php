<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Privatelink\V20200415\Models;

use AlibabaCloud\Tea\Model;

class DetachSecurityGroupFromVpcEndpointRequest extends Model
{
    /**
     * @description Specifies whether to check the request without performing the operation. Valid values:
     *
     *   **true**: sends a request for check purpose only. If you select this option, the endpoint is still associated with the security group after the request passes the check. The system checks whether your AccessKey pair is valid, whether RAM users are granted required permissions, and whether the required parameters are set. If the request fails to pass the check, the corresponding error message is returned. If the request passes the check, the `DryRunOperation` error code is returned.
     *   **false** (default): sends a common request. If the request passes the check, the 2xx HTTP status code is returned, and the operation is performed.
     *
     * @example 0c593ea1-3bea-11e9-b96b-88e9fe637760
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The ID of the endpoint that you want to disassociate from the security group.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The ID of the security group from which you want to disassociate the endpoint.
     *
     * @example ep-hp33b2e43fays7s8****
     *
     * @var string
     */
    public $endpointId;

    /**
     * @description *   **DetachSecurityGroupFromVpcEndpoint** is an asynchronous operation. After you send a request, the system returns a request ID. However, the operation is still being performed in the system background. You can call the [ListVpcEndpoints](~~183558#doc-api-Privatelink-ListVpcEndpoints~~) operation to query whether the endpoint is disassociated from the security group.
     *
     *   If the endpoint is in the **Pending** state, it indicates that the endpoint is being disassociated from the security group.
     *   If the endpoint is in the **Active** state, it indicates that the endpoint is disassociated from the security group.
     *
     *   You cannot use the **DetachSecurityGroupFromVpcEndpoint** operation to disassociate an endpoint from multiple security groups at the same time.
     *
     * @example eu-west-1
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the region to which the endpoint belongs. You can call the [DescribeRegions](~~120468#doc-api-Privatelink-DescribeRegions~~) operation to query the most recent region list.
     *
     * @example sg-hp3c8qj1tyct90ej****
     *
     * @var string
     */
    public $securityGroupId;
    protected $_name = [
        'clientToken'     => 'ClientToken',
        'dryRun'          => 'DryRun',
        'endpointId'      => 'EndpointId',
        'regionId'        => 'RegionId',
        'securityGroupId' => 'SecurityGroupId',
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
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetachSecurityGroupFromVpcEndpointRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }

        return $model;
    }
}
