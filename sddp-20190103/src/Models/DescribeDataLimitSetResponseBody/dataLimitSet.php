<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataLimitSetResponseBody;

use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataLimitSetResponseBody\dataLimitSet\dataLimitList;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataLimitSetResponseBody\dataLimitSet\ossBucketList;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataLimitSetResponseBody\dataLimitSet\regionList;
use AlibabaCloud\Tea\Model;

class dataLimitSet extends Model
{
    /**
     * @description An array that consists of data assets that DSC is authorized to scan.
     *
     * @var dataLimitList[]
     */
    public $dataLimitList;

    /**
     * @description An array consisting of the OSS objects that DSC is authorized to scan.
     *
     * @var ossBucketList[]
     */
    public $ossBucketList;

    /**
     * @description An array consisting of the regions in which the data assets can be scanned.
     *
     * @var regionList[]
     */
    public $regionList;

    /**
     * @description The type of service to which the data asset belongs. Valid values:
     *
     *   **1**: MaxCompute
     *   **2**: OSS
     *   **3**: AnalyticDB for MySQL
     *   **4**: Tablestore
     *   **5**: ApsaraDB RDS
     *
     * @example 2
     *
     * @var int
     */
    public $resourceType;

    /**
     * @description The service to which the data asset belongs. Valid values:
     *
     *   **ODPS**
     *   **OSS**
     *   **ADS**
     *   **OTS**
     *   **RDS**
     *
     * @example OSS
     *
     * @var string
     */
    public $resourceTypeCode;

    /**
     * @description The total number of data objects in the data assets.
     *
     * @example 10
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'dataLimitList'    => 'DataLimitList',
        'ossBucketList'    => 'OssBucketList',
        'regionList'       => 'RegionList',
        'resourceType'     => 'ResourceType',
        'resourceTypeCode' => 'ResourceTypeCode',
        'totalCount'       => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataLimitList) {
            $res['DataLimitList'] = [];
            if (null !== $this->dataLimitList && \is_array($this->dataLimitList)) {
                $n = 0;
                foreach ($this->dataLimitList as $item) {
                    $res['DataLimitList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ossBucketList) {
            $res['OssBucketList'] = [];
            if (null !== $this->ossBucketList && \is_array($this->ossBucketList)) {
                $n = 0;
                foreach ($this->ossBucketList as $item) {
                    $res['OssBucketList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->regionList) {
            $res['RegionList'] = [];
            if (null !== $this->regionList && \is_array($this->regionList)) {
                $n = 0;
                foreach ($this->regionList as $item) {
                    $res['RegionList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->resourceTypeCode) {
            $res['ResourceTypeCode'] = $this->resourceTypeCode;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataLimitSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataLimitList'])) {
            if (!empty($map['DataLimitList'])) {
                $model->dataLimitList = [];
                $n                    = 0;
                foreach ($map['DataLimitList'] as $item) {
                    $model->dataLimitList[$n++] = null !== $item ? dataLimitList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OssBucketList'])) {
            if (!empty($map['OssBucketList'])) {
                $model->ossBucketList = [];
                $n                    = 0;
                foreach ($map['OssBucketList'] as $item) {
                    $model->ossBucketList[$n++] = null !== $item ? ossBucketList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RegionList'])) {
            if (!empty($map['RegionList'])) {
                $model->regionList = [];
                $n                 = 0;
                foreach ($map['RegionList'] as $item) {
                    $model->regionList[$n++] = null !== $item ? regionList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['ResourceTypeCode'])) {
            $model->resourceTypeCode = $map['ResourceTypeCode'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
