<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataLimitSetResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataLimitSetResponseBody\dataLimitSet\dataLimitList;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataLimitSetResponseBody\dataLimitSet\ossBucketList;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeDataLimitSetResponseBody\dataLimitSet\regionList;

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
        'dataLimitList' => 'DataLimitList',
        'ossBucketList' => 'OssBucketList',
        'regionList' => 'RegionList',
        'resourceType' => 'ResourceType',
        'resourceTypeCode' => 'ResourceTypeCode',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->dataLimitList)) {
            Model::validateArray($this->dataLimitList);
        }
        if (\is_array($this->ossBucketList)) {
            Model::validateArray($this->ossBucketList);
        }
        if (\is_array($this->regionList)) {
            Model::validateArray($this->regionList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataLimitList) {
            if (\is_array($this->dataLimitList)) {
                $res['DataLimitList'] = [];
                $n1 = 0;
                foreach ($this->dataLimitList as $item1) {
                    $res['DataLimitList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ossBucketList) {
            if (\is_array($this->ossBucketList)) {
                $res['OssBucketList'] = [];
                $n1 = 0;
                foreach ($this->ossBucketList as $item1) {
                    $res['OssBucketList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionList) {
            if (\is_array($this->regionList)) {
                $res['RegionList'] = [];
                $n1 = 0;
                foreach ($this->regionList as $item1) {
                    $res['RegionList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataLimitList'])) {
            if (!empty($map['DataLimitList'])) {
                $model->dataLimitList = [];
                $n1 = 0;
                foreach ($map['DataLimitList'] as $item1) {
                    $model->dataLimitList[$n1] = dataLimitList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['OssBucketList'])) {
            if (!empty($map['OssBucketList'])) {
                $model->ossBucketList = [];
                $n1 = 0;
                foreach ($map['OssBucketList'] as $item1) {
                    $model->ossBucketList[$n1] = ossBucketList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionList'])) {
            if (!empty($map['RegionList'])) {
                $model->regionList = [];
                $n1 = 0;
                foreach ($map['RegionList'] as $item1) {
                    $model->regionList[$n1] = regionList::fromMap($item1);
                    ++$n1;
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
