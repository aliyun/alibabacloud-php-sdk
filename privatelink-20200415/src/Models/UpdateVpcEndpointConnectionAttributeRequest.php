<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Privatelink\V20200415\Models;

use AlibabaCloud\Tea\Model;

class UpdateVpcEndpointConnectionAttributeRequest extends Model
{
    /**
     * @description The bandwidth of the endpoint connection that you want to modify. Unit: Mbit/s. Valid values: **3072** to **10240**.
     *
     * >  The bandwidth of an endpoint connection is in the range of **100** to **10,240** Mbit/s. The default bandwidth is **3,072** Mbit/s. When the endpoint is connected to the endpoint service, the default bandwidth is the minimum bandwidth. In this case, the connection bandwidth range is **3,072** to **10,240** Mbit/s. If Classic Load Balancer (CLB) instances or Application Load Balancer (ALB) instances are specified as service resources, you can modify the endpoint connection bandwidth based on your business requirements. This parameter is invalid if Network Load Balancer (NLB) instances are specified as service resources.
     * @example 1000
     *
     * @var int
     */
    public $bandwidth;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters.
     * @example 0c593ea1-3bea-11e9-b96b-88e9fe637760
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to perform only a dry run, without performing the actual request. Valid values:
     *
     *   **true**: performs only a dry run. The system checks the request for potential issues, including missing parameter values, incorrect request syntax, and service limits. If the request fails the dry run, an error message is returned. If the request passes the dry run, the `DryRunOperation` error code is returned.
     *   **false** (default): performs a dry run and performs the actual request. If the request passes the dry run, a 2xx HTTP status code is returned and the operation is performed.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The endpoint ID.
     *
     * @example ep-hp33b2e43fays7s8****
     *
     * @var string
     */
    public $endpointId;

    /**
     * @description The region ID of the endpoint connection whose bandwidth you want to modify. You can call the [DescribeRegions](~~120468~~) operation to query the most recent region list.
     *
     * @example eu-west-1
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The endpoint service ID.
     *
     * @example epsrv-hp3vpx8yqxblby3i****
     *
     * @var string
     */
    public $serviceId;
    protected $_name = [
        'bandwidth'   => 'Bandwidth',
        'clientToken' => 'ClientToken',
        'dryRun'      => 'DryRun',
        'endpointId'  => 'EndpointId',
        'regionId'    => 'RegionId',
        'serviceId'   => 'ServiceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidth) {
            $res['Bandwidth'] = $this->bandwidth;
        }
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
        if (null !== $this->serviceId) {
            $res['ServiceId'] = $this->serviceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateVpcEndpointConnectionAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bandwidth'])) {
            $model->bandwidth = $map['Bandwidth'];
        }
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
        if (isset($map['ServiceId'])) {
            $model->serviceId = $map['ServiceId'];
        }

        return $model;
    }
}
