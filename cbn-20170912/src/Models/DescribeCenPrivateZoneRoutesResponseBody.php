<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenPrivateZoneRoutesResponseBody\privateZoneInfos;

class DescribeCenPrivateZoneRoutesResponseBody extends Model
{
    /**
     * @var string
     */
    public $cenId;
    /**
     * @var int
     */
    public $pageNumber;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $privateZoneDnsServers;
    /**
     * @var privateZoneInfos
     */
    public $privateZoneInfos;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'cenId'                 => 'CenId',
        'pageNumber'            => 'PageNumber',
        'pageSize'              => 'PageSize',
        'privateZoneDnsServers' => 'PrivateZoneDnsServers',
        'privateZoneInfos'      => 'PrivateZoneInfos',
        'requestId'             => 'RequestId',
        'totalCount'            => 'TotalCount',
    ];

    public function validate()
    {
        if (null !== $this->privateZoneInfos) {
            $this->privateZoneInfos->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->privateZoneDnsServers) {
            $res['PrivateZoneDnsServers'] = $this->privateZoneDnsServers;
        }

        if (null !== $this->privateZoneInfos) {
            $res['PrivateZoneInfos'] = null !== $this->privateZoneInfos ? $this->privateZoneInfos->toArray($noStream) : $this->privateZoneInfos;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PrivateZoneDnsServers'])) {
            $model->privateZoneDnsServers = $map['PrivateZoneDnsServers'];
        }

        if (isset($map['PrivateZoneInfos'])) {
            $model->privateZoneInfos = privateZoneInfos::fromMap($map['PrivateZoneInfos']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
