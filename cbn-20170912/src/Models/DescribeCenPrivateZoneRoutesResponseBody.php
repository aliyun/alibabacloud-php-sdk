<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenPrivateZoneRoutesResponseBody\privateZoneInfos;
use AlibabaCloud\Tea\Model;

class DescribeCenPrivateZoneRoutesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $privateZoneDnsServers;

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
     * @var int
     */
    public $totalCount;

    /**
     * @var privateZoneInfos
     */
    public $privateZoneInfos;
    protected $_name = [
        'requestId'             => 'RequestId',
        'privateZoneDnsServers' => 'PrivateZoneDnsServers',
        'cenId'                 => 'CenId',
        'pageNumber'            => 'PageNumber',
        'pageSize'              => 'PageSize',
        'totalCount'            => 'TotalCount',
        'privateZoneInfos'      => 'PrivateZoneInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->privateZoneDnsServers) {
            $res['PrivateZoneDnsServers'] = $this->privateZoneDnsServers;
        }
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->privateZoneInfos) {
            $res['PrivateZoneInfos'] = null !== $this->privateZoneInfos ? $this->privateZoneInfos->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCenPrivateZoneRoutesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PrivateZoneDnsServers'])) {
            $model->privateZoneDnsServers = $map['PrivateZoneDnsServers'];
        }
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['PrivateZoneInfos'])) {
            $model->privateZoneInfos = privateZoneInfos::fromMap($map['PrivateZoneInfos']);
        }

        return $model;
    }
}
