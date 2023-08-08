<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenPrivateZoneRoutesResponseBody\privateZoneInfos;
use AlibabaCloud\Tea\Model;

class DescribeCenPrivateZoneRoutesResponseBody extends Model
{
    /**
     * @description The ID of the CEN instance.
     *
     * @example cen-7qthudw0ll6jmc****
     *
     * @var string
     */
    public $cenId;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The IP address of the DNS server used by PrivateZone.
     *
     * @example 100.100.XX.XX/32,100.100.XX.XX/32
     *
     * @var string
     */
    public $privateZoneDnsServers;

    /**
     * @description The detailed configuration of PrivateZone.
     *
     * @var privateZoneInfos
     */
    public $privateZoneInfos;

    /**
     * @description The ID of the request.
     *
     * @example 461EC1B5-04A8-4706-8764-8F5BCEF48A6F
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 2
     *
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
    }

    public function toMap()
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
            $res['PrivateZoneInfos'] = null !== $this->privateZoneInfos ? $this->privateZoneInfos->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
