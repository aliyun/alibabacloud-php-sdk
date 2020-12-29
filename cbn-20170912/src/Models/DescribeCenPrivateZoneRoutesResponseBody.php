<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenPrivateZoneRoutesResponseBody\privateZoneInfos;
use AlibabaCloud\Tea\Model;

class DescribeCenPrivateZoneRoutesResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var privateZoneInfos[]
     */
    public $privateZoneInfos;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var string
     */
    public $cenId;

    /**
     * @var string
     */
    public $privateZoneDnsServers;
    protected $_name = [
        'totalCount'            => 'TotalCount',
        'requestId'             => 'RequestId',
        'pageSize'              => 'PageSize',
        'privateZoneInfos'      => 'PrivateZoneInfos',
        'pageNumber'            => 'PageNumber',
        'cenId'                 => 'CenId',
        'privateZoneDnsServers' => 'PrivateZoneDnsServers',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->privateZoneInfos) {
            $res['PrivateZoneInfos'] = [];
            if (null !== $this->privateZoneInfos && \is_array($this->privateZoneInfos)) {
                $n = 0;
                foreach ($this->privateZoneInfos as $item) {
                    $res['PrivateZoneInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->cenId) {
            $res['CenId'] = $this->cenId;
        }
        if (null !== $this->privateZoneDnsServers) {
            $res['PrivateZoneDnsServers'] = $this->privateZoneDnsServers;
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PrivateZoneInfos'])) {
            if (!empty($map['PrivateZoneInfos'])) {
                $model->privateZoneInfos = [];
                $n                       = 0;
                foreach ($map['PrivateZoneInfos'] as $item) {
                    $model->privateZoneInfos[$n++] = null !== $item ? privateZoneInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['CenId'])) {
            $model->cenId = $map['CenId'];
        }
        if (isset($map['PrivateZoneDnsServers'])) {
            $model->privateZoneDnsServers = $map['PrivateZoneDnsServers'];
        }

        return $model;
    }
}
