<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRegionDomainRouteEntriesResponseBody\cenRouteEntries;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRegionDomainRouteEntriesResponseBody\cenRouteEntries\cenRouteEntry\asPaths;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRegionDomainRouteEntriesResponseBody\cenRouteEntries\cenRouteEntry\cenOutRouteMapRecords;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRegionDomainRouteEntriesResponseBody\cenRouteEntries\cenRouteEntry\cenRouteMapRecords;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRegionDomainRouteEntriesResponseBody\cenRouteEntries\cenRouteEntry\communities;
use AlibabaCloud\Tea\Model;

class cenRouteEntry extends Model
{
    /**
     * @description The AS paths of the route.
     *
     * @var asPaths
     */
    public $asPaths;

    /**
     * @description The routing policy that the routes match in the outbound direction.
     *
     * @var cenOutRouteMapRecords
     */
    public $cenOutRouteMapRecords;

    /**
     * @description The routing policy that the routes match in the inbound direction.
     *
     * @var cenRouteMapRecords
     */
    public $cenRouteMapRecords;

    /**
     * @description The communities of the route.
     *
     * @var communities
     */
    public $communities;

    /**
     * @description The destination CIDR block of the route.
     *
     * @example 192.168.1.0/24
     *
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @description The ID of the instance specified as the next hop in the route.
     *
     * @example vpc-bp1j8728mm6pweeod****
     *
     * @var string
     */
    public $nextHopInstanceId;

    /**
     * @description The ID of the region to which the network instance specified as the next hop in the route belongs.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $nextHopRegionId;

    /**
     * @description The type of the instance specified as the next hop in the route. Valid values:
     *
     *   **VPC**: virtual private cloud (VPC)
     *   **VBR**: virtual border router (VBR)
     *   **CCN**: Cloud Connect Network (CCN) instance
     *   **local_service**: system route. No next hop is specified.
     *
     * @example VPC
     *
     * @var string
     */
    public $nextHopType;

    /**
     * @description The route priority.
     *
     * A smaller value indicates a higher priority.
     * @example 50
     *
     * @var int
     */
    public $preference;

    /**
     * @description The route status. Valid values:
     *
     *   **Active**: available
     *   **Candidate**: standby
     *   **Rejected**: rejected
     *   **Prohibited**: prohibited
     *
     * @example Active
     *
     * @var string
     */
    public $status;

    /**
     * @description Indicates whether the route can be advertised to other regions. Valid values:
     *
     *   **Active**: The route can be advertised to other regions.
     *   **Prohibited**: The route cannot be advertised to other regions.
     *
     * @example Active
     *
     * @var string
     */
    public $toOtherRegionStatus;

    /**
     * @description The route type. Valid values:
     *
     *   **CEN**: route that is advertised through CEN
     *   **Custom**: custom route
     *   **System**: system route
     *
     * @example CEN
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'asPaths'               => 'AsPaths',
        'cenOutRouteMapRecords' => 'CenOutRouteMapRecords',
        'cenRouteMapRecords'    => 'CenRouteMapRecords',
        'communities'           => 'Communities',
        'destinationCidrBlock'  => 'DestinationCidrBlock',
        'nextHopInstanceId'     => 'NextHopInstanceId',
        'nextHopRegionId'       => 'NextHopRegionId',
        'nextHopType'           => 'NextHopType',
        'preference'            => 'Preference',
        'status'                => 'Status',
        'toOtherRegionStatus'   => 'ToOtherRegionStatus',
        'type'                  => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asPaths) {
            $res['AsPaths'] = null !== $this->asPaths ? $this->asPaths->toMap() : null;
        }
        if (null !== $this->cenOutRouteMapRecords) {
            $res['CenOutRouteMapRecords'] = null !== $this->cenOutRouteMapRecords ? $this->cenOutRouteMapRecords->toMap() : null;
        }
        if (null !== $this->cenRouteMapRecords) {
            $res['CenRouteMapRecords'] = null !== $this->cenRouteMapRecords ? $this->cenRouteMapRecords->toMap() : null;
        }
        if (null !== $this->communities) {
            $res['Communities'] = null !== $this->communities ? $this->communities->toMap() : null;
        }
        if (null !== $this->destinationCidrBlock) {
            $res['DestinationCidrBlock'] = $this->destinationCidrBlock;
        }
        if (null !== $this->nextHopInstanceId) {
            $res['NextHopInstanceId'] = $this->nextHopInstanceId;
        }
        if (null !== $this->nextHopRegionId) {
            $res['NextHopRegionId'] = $this->nextHopRegionId;
        }
        if (null !== $this->nextHopType) {
            $res['NextHopType'] = $this->nextHopType;
        }
        if (null !== $this->preference) {
            $res['Preference'] = $this->preference;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->toOtherRegionStatus) {
            $res['ToOtherRegionStatus'] = $this->toOtherRegionStatus;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cenRouteEntry
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AsPaths'])) {
            $model->asPaths = asPaths::fromMap($map['AsPaths']);
        }
        if (isset($map['CenOutRouteMapRecords'])) {
            $model->cenOutRouteMapRecords = cenOutRouteMapRecords::fromMap($map['CenOutRouteMapRecords']);
        }
        if (isset($map['CenRouteMapRecords'])) {
            $model->cenRouteMapRecords = cenRouteMapRecords::fromMap($map['CenRouteMapRecords']);
        }
        if (isset($map['Communities'])) {
            $model->communities = communities::fromMap($map['Communities']);
        }
        if (isset($map['DestinationCidrBlock'])) {
            $model->destinationCidrBlock = $map['DestinationCidrBlock'];
        }
        if (isset($map['NextHopInstanceId'])) {
            $model->nextHopInstanceId = $map['NextHopInstanceId'];
        }
        if (isset($map['NextHopRegionId'])) {
            $model->nextHopRegionId = $map['NextHopRegionId'];
        }
        if (isset($map['NextHopType'])) {
            $model->nextHopType = $map['NextHopType'];
        }
        if (isset($map['Preference'])) {
            $model->preference = $map['Preference'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ToOtherRegionStatus'])) {
            $model->toOtherRegionStatus = $map['ToOtherRegionStatus'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
