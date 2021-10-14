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
     * @var dataLimitList[]
     */
    public $dataLimitList;

    /**
     * @var ossBucketList[]
     */
    public $ossBucketList;

    /**
     * @var regionList[]
     */
    public $regionList;

    /**
     * @var int
     */
    public $resourceType;

    /**
     * @var string
     */
    public $resourceTypeCode;

    /**
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
