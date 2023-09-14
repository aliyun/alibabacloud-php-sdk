<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Tea\Model;

class ListCustomRoutingEndpointGroupDestinationsRequest extends Model
{
    /**
     * @description The ID of the GA instance.
     *
     * @example ga-bp1odcab8tmno0hdq****
     *
     * @var string
     */
    public $acceleratorId;

    /**
     * @description The ID of the endpoint group.
     *
     * @example epg-bp16jdc00bhe97sr5****
     *
     * @var string
     */
    public $endpointGroupId;

    /**
     * @description The start port of the backend service port range of the endpoint group.
     *
     * Valid values: **1** to **65499**. The **FromPort** value must be smaller than or equal to the **ToPort** value.
     * @example 80
     *
     * @var int
     */
    public $fromPort;

    /**
     * @description The ID of the listener.
     *
     * @example lsr-bp1bpn0kn908w4nbw****
     *
     * @var string
     */
    public $listenerId;

    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Maximum value: **50**. Default value: **10**.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The backend service protocols of the endpoint group. Valid values:
     *
     * - **TCP**: TCP.
     * - **UDP**: UDP.
     * - **TCP,UDP**: TCP and UDP.
     *
     * You can specify up to 10 protocols.
     * @var string[]
     */
    public $protocols;

    /**
     * @description The ID of the region where the GA instance is deployed. Set the value to **cn-hangzhou**.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The end port of the backend service port range of the endpoint group.
     *
     * Valid values: **1** to **65499**. The **FromPort** value must be smaller than or equal to the **ToPort** value.
     * @example 80
     *
     * @var int
     */
    public $toPort;
    protected $_name = [
        'acceleratorId'   => 'AcceleratorId',
        'endpointGroupId' => 'EndpointGroupId',
        'fromPort'        => 'FromPort',
        'listenerId'      => 'ListenerId',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'protocols'       => 'Protocols',
        'regionId'        => 'RegionId',
        'toPort'          => 'ToPort',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
        }
        if (null !== $this->endpointGroupId) {
            $res['EndpointGroupId'] = $this->endpointGroupId;
        }
        if (null !== $this->fromPort) {
            $res['FromPort'] = $this->fromPort;
        }
        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->protocols) {
            $res['Protocols'] = $this->protocols;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->toPort) {
            $res['ToPort'] = $this->toPort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCustomRoutingEndpointGroupDestinationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }
        if (isset($map['EndpointGroupId'])) {
            $model->endpointGroupId = $map['EndpointGroupId'];
        }
        if (isset($map['FromPort'])) {
            $model->fromPort = $map['FromPort'];
        }
        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Protocols'])) {
            if (!empty($map['Protocols'])) {
                $model->protocols = $map['Protocols'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ToPort'])) {
            $model->toPort = $map['ToPort'];
        }

        return $model;
    }
}
