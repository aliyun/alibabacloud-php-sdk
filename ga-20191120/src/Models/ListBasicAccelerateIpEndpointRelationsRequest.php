<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class ListBasicAccelerateIpEndpointRelationsRequest extends Model
{
    /**
     * @description The ID of the accelerated IP address.
     *
     * @example gaip-bp1****
     *
     * @var string
     */
    public $accelerateIpId;

    /**
     * @description The ID of the basic GA instance.
     *
     * This parameter is required.
     * @example ga-bp17frjjh0udz4qz****
     *
     * @var string
     */
    public $acceleratorId;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters.
     *
     * >  If you do not specify this parameter, the system automatically uses the **request ID** as the **client token**. The **request ID** may be different for each request.
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The ID of the endpoint.
     *
     * @example ep-bp14sz7ftcwwjgrdm****
     *
     * @var string
     */
    public $endpointId;

    /**
     * @description The number of entries to return on each page. Valid values: **1** to **50**. Default value: **10**.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that determines the start point of the query. Valid values:
     *
     *   If this is your first query or no next query is to be sent, ignore this parameter.
     *   If a next query is to be sent, set the value to the value of NextToken that is returned from the last call.
     *
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the region where the GA instance is deployed. Set the value to **cn-hangzhou**.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'accelerateIpId' => 'AccelerateIpId',
        'acceleratorId'  => 'AcceleratorId',
        'clientToken'    => 'ClientToken',
        'endpointId'     => 'EndpointId',
        'maxResults'     => 'MaxResults',
        'nextToken'      => 'NextToken',
        'regionId'       => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accelerateIpId) {
            $res['AccelerateIpId'] = $this->accelerateIpId;
        }
        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListBasicAccelerateIpEndpointRelationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccelerateIpId'])) {
            $model->accelerateIpId = $map['AccelerateIpId'];
        }
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
