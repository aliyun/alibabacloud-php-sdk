<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeZonesRequest\resourceTag;

class DescribeZonesRequest extends Model
{
    /**
     * @var string
     */
    public $keyword;

    /**
     * @var string
     */
    public $lang;

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
    public $queryRegionId;

    /**
     * @var string
     */
    public $queryVpcId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var resourceTag[]
     */
    public $resourceTag;

    /**
     * @var string
     */
    public $searchMode;

    /**
     * @var string[]
     */
    public $zoneTag;

    /**
     * @var string
     */
    public $zoneType;
    protected $_name = [
        'keyword' => 'Keyword',
        'lang' => 'Lang',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'queryRegionId' => 'QueryRegionId',
        'queryVpcId' => 'QueryVpcId',
        'resourceGroupId' => 'ResourceGroupId',
        'resourceTag' => 'ResourceTag',
        'searchMode' => 'SearchMode',
        'zoneTag' => 'ZoneTag',
        'zoneType' => 'ZoneType',
    ];

    public function validate()
    {
        if (\is_array($this->resourceTag)) {
            Model::validateArray($this->resourceTag);
        }
        if (\is_array($this->zoneTag)) {
            Model::validateArray($this->zoneTag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->queryRegionId) {
            $res['QueryRegionId'] = $this->queryRegionId;
        }

        if (null !== $this->queryVpcId) {
            $res['QueryVpcId'] = $this->queryVpcId;
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->resourceTag) {
            if (\is_array($this->resourceTag)) {
                $res['ResourceTag'] = [];
                $n1 = 0;
                foreach ($this->resourceTag as $item1) {
                    $res['ResourceTag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->searchMode) {
            $res['SearchMode'] = $this->searchMode;
        }

        if (null !== $this->zoneTag) {
            if (\is_array($this->zoneTag)) {
                $res['ZoneTag'] = [];
                $n1 = 0;
                foreach ($this->zoneTag as $item1) {
                    $res['ZoneTag'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->zoneType) {
            $res['ZoneType'] = $this->zoneType;
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
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['QueryRegionId'])) {
            $model->queryRegionId = $map['QueryRegionId'];
        }

        if (isset($map['QueryVpcId'])) {
            $model->queryVpcId = $map['QueryVpcId'];
        }

        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        if (isset($map['ResourceTag'])) {
            if (!empty($map['ResourceTag'])) {
                $model->resourceTag = [];
                $n1 = 0;
                foreach ($map['ResourceTag'] as $item1) {
                    $model->resourceTag[$n1] = resourceTag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SearchMode'])) {
            $model->searchMode = $map['SearchMode'];
        }

        if (isset($map['ZoneTag'])) {
            if (!empty($map['ZoneTag'])) {
                $model->zoneTag = [];
                $n1 = 0;
                foreach ($map['ZoneTag'] as $item1) {
                    $model->zoneTag[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ZoneType'])) {
            $model->zoneType = $map['ZoneType'];
        }

        return $model;
    }
}
