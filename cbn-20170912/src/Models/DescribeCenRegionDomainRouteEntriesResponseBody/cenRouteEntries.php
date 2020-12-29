<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRegionDomainRouteEntriesResponseBody;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRegionDomainRouteEntriesResponseBody\cenRouteEntries\cenOutRouteMapRecords;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenRegionDomainRouteEntriesResponseBody\cenRouteEntries\cenRouteMapRecords;
use AlibabaCloud\Tea\Model;

class cenRouteEntries extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $status;

    /**
     * @var cenOutRouteMapRecords[]
     */
    public $cenOutRouteMapRecords;

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
     * @var string[]
     */
    public $asPaths;

    /**
     * @var string
     */
    public $toOtherRegionStatus;

    /**
     * @var string[]
     */
    public $communities;

    /**
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @var int
     */
    public $preference;

    /**
     * @var cenRouteMapRecords[]
     */
    public $cenRouteMapRecords;
    protected $_name = [
        'type'                  => 'Type',
        'status'                => 'Status',
        'cenOutRouteMapRecords' => 'CenOutRouteMapRecords',
        'nextHopType'           => 'NextHopType',
        'nextHopInstanceId'     => 'NextHopInstanceId',
        'nextHopRegionId'       => 'NextHopRegionId',
        'asPaths'               => 'AsPaths',
        'toOtherRegionStatus'   => 'ToOtherRegionStatus',
        'communities'           => 'Communities',
        'destinationCidrBlock'  => 'DestinationCidrBlock',
        'preference'            => 'Preference',
        'cenRouteMapRecords'    => 'CenRouteMapRecords',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->cenOutRouteMapRecords) {
            $res['CenOutRouteMapRecords'] = [];
            if (null !== $this->cenOutRouteMapRecords && \is_array($this->cenOutRouteMapRecords)) {
                $n = 0;
                foreach ($this->cenOutRouteMapRecords as $item) {
                    $res['CenOutRouteMapRecords'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->asPaths) {
            $res['AsPaths'] = $this->asPaths;
        }
        if (null !== $this->toOtherRegionStatus) {
            $res['ToOtherRegionStatus'] = $this->toOtherRegionStatus;
        }
        if (null !== $this->communities) {
            $res['Communities'] = $this->communities;
        }
        if (null !== $this->destinationCidrBlock) {
            $res['DestinationCidrBlock'] = $this->destinationCidrBlock;
        }
        if (null !== $this->preference) {
            $res['Preference'] = $this->preference;
        }
        if (null !== $this->cenRouteMapRecords) {
            $res['CenRouteMapRecords'] = [];
            if (null !== $this->cenRouteMapRecords && \is_array($this->cenRouteMapRecords)) {
                $n = 0;
                foreach ($this->cenRouteMapRecords as $item) {
                    $res['CenRouteMapRecords'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cenRouteEntries
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CenOutRouteMapRecords'])) {
            if (!empty($map['CenOutRouteMapRecords'])) {
                $model->cenOutRouteMapRecords = [];
                $n                            = 0;
                foreach ($map['CenOutRouteMapRecords'] as $item) {
                    $model->cenOutRouteMapRecords[$n++] = null !== $item ? cenOutRouteMapRecords::fromMap($item) : $item;
                }
            }
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
        if (isset($map['AsPaths'])) {
            if (!empty($map['AsPaths'])) {
                $model->asPaths = $map['AsPaths'];
            }
        }
        if (isset($map['ToOtherRegionStatus'])) {
            $model->toOtherRegionStatus = $map['ToOtherRegionStatus'];
        }
        if (isset($map['Communities'])) {
            if (!empty($map['Communities'])) {
                $model->communities = $map['Communities'];
            }
        }
        if (isset($map['DestinationCidrBlock'])) {
            $model->destinationCidrBlock = $map['DestinationCidrBlock'];
        }
        if (isset($map['Preference'])) {
            $model->preference = $map['Preference'];
        }
        if (isset($map['CenRouteMapRecords'])) {
            if (!empty($map['CenRouteMapRecords'])) {
                $model->cenRouteMapRecords = [];
                $n                         = 0;
                foreach ($map['CenRouteMapRecords'] as $item) {
                    $model->cenRouteMapRecords[$n++] = null !== $item ? cenRouteMapRecords::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
