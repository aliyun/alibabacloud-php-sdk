<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRegionDomainRouteEntriesResponseBody\cenRouteEntries;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRegionDomainRouteEntriesResponseBody\cenRouteEntries\cenRouteEntry\asPaths;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRegionDomainRouteEntriesResponseBody\cenRouteEntries\cenRouteEntry\cenOutRouteMapRecords;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRegionDomainRouteEntriesResponseBody\cenRouteEntries\cenRouteEntry\cenRouteMapRecords;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRegionDomainRouteEntriesResponseBody\cenRouteEntries\cenRouteEntry\communities;

class cenRouteEntry extends Model
{
    /**
     * @var asPaths
     */
    public $asPaths;
    /**
     * @var cenOutRouteMapRecords
     */
    public $cenOutRouteMapRecords;
    /**
     * @var cenRouteMapRecords
     */
    public $cenRouteMapRecords;
    /**
     * @var communities
     */
    public $communities;
    /**
     * @var string
     */
    public $destinationCidrBlock;
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
    public $nextHopType;
    /**
     * @var int
     */
    public $preference;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $toOtherRegionStatus;
    /**
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
        if (null !== $this->asPaths) {
            $this->asPaths->validate();
        }
        if (null !== $this->cenOutRouteMapRecords) {
            $this->cenOutRouteMapRecords->validate();
        }
        if (null !== $this->cenRouteMapRecords) {
            $this->cenRouteMapRecords->validate();
        }
        if (null !== $this->communities) {
            $this->communities->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asPaths) {
            $res['AsPaths'] = null !== $this->asPaths ? $this->asPaths->toArray($noStream) : $this->asPaths;
        }

        if (null !== $this->cenOutRouteMapRecords) {
            $res['CenOutRouteMapRecords'] = null !== $this->cenOutRouteMapRecords ? $this->cenOutRouteMapRecords->toArray($noStream) : $this->cenOutRouteMapRecords;
        }

        if (null !== $this->cenRouteMapRecords) {
            $res['CenRouteMapRecords'] = null !== $this->cenRouteMapRecords ? $this->cenRouteMapRecords->toArray($noStream) : $this->cenRouteMapRecords;
        }

        if (null !== $this->communities) {
            $res['Communities'] = null !== $this->communities ? $this->communities->toArray($noStream) : $this->communities;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
