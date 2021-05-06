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
     * @var string
     */
    public $toOtherRegionStatus;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $nextHopType;

    /**
     * @var string
     */
    public $nextHopInstanceId;

    /**
     * @var string
     */
    public $nextHopRegionId;

    /**
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @var int
     */
    public $preference;

    /**
     * @var cenRouteMapRecords
     */
    public $cenRouteMapRecords;

    /**
     * @var cenOutRouteMapRecords
     */
    public $cenOutRouteMapRecords;

    /**
     * @var communities
     */
    public $communities;

    /**
     * @var asPaths
     */
    public $asPaths;
    protected $_name = [
        'toOtherRegionStatus'   => 'ToOtherRegionStatus',
        'type'                  => 'Type',
        'status'                => 'Status',
        'nextHopType'           => 'NextHopType',
        'nextHopInstanceId'     => 'NextHopInstanceId',
        'nextHopRegionId'       => 'NextHopRegionId',
        'destinationCidrBlock'  => 'DestinationCidrBlock',
        'preference'            => 'Preference',
        'cenRouteMapRecords'    => 'CenRouteMapRecords',
        'cenOutRouteMapRecords' => 'CenOutRouteMapRecords',
        'communities'           => 'Communities',
        'asPaths'               => 'AsPaths',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->toOtherRegionStatus) {
            $res['ToOtherRegionStatus'] = $this->toOtherRegionStatus;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->nextHopType) {
            $res['NextHopType'] = $this->nextHopType;
        }
        if (null !== $this->nextHopInstanceId) {
            $res['NextHopInstanceId'] = $this->nextHopInstanceId;
        }
        if (null !== $this->nextHopRegionId) {
            $res['NextHopRegionId'] = $this->nextHopRegionId;
        }
        if (null !== $this->destinationCidrBlock) {
            $res['DestinationCidrBlock'] = $this->destinationCidrBlock;
        }
        if (null !== $this->preference) {
            $res['Preference'] = $this->preference;
        }
        if (null !== $this->cenRouteMapRecords) {
            $res['CenRouteMapRecords'] = null !== $this->cenRouteMapRecords ? $this->cenRouteMapRecords->toMap() : null;
        }
        if (null !== $this->cenOutRouteMapRecords) {
            $res['CenOutRouteMapRecords'] = null !== $this->cenOutRouteMapRecords ? $this->cenOutRouteMapRecords->toMap() : null;
        }
        if (null !== $this->communities) {
            $res['Communities'] = null !== $this->communities ? $this->communities->toMap() : null;
        }
        if (null !== $this->asPaths) {
            $res['AsPaths'] = null !== $this->asPaths ? $this->asPaths->toMap() : null;
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
        if (isset($map['ToOtherRegionStatus'])) {
            $model->toOtherRegionStatus = $map['ToOtherRegionStatus'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['NextHopType'])) {
            $model->nextHopType = $map['NextHopType'];
        }
        if (isset($map['NextHopInstanceId'])) {
            $model->nextHopInstanceId = $map['NextHopInstanceId'];
        }
        if (isset($map['NextHopRegionId'])) {
            $model->nextHopRegionId = $map['NextHopRegionId'];
        }
        if (isset($map['DestinationCidrBlock'])) {
            $model->destinationCidrBlock = $map['DestinationCidrBlock'];
        }
        if (isset($map['Preference'])) {
            $model->preference = $map['Preference'];
        }
        if (isset($map['CenRouteMapRecords'])) {
            $model->cenRouteMapRecords = cenRouteMapRecords::fromMap($map['CenRouteMapRecords']);
        }
        if (isset($map['CenOutRouteMapRecords'])) {
            $model->cenOutRouteMapRecords = cenOutRouteMapRecords::fromMap($map['CenOutRouteMapRecords']);
        }
        if (isset($map['Communities'])) {
            $model->communities = communities::fromMap($map['Communities']);
        }
        if (isset($map['AsPaths'])) {
            $model->asPaths = asPaths::fromMap($map['AsPaths']);
        }

        return $model;
    }
}
