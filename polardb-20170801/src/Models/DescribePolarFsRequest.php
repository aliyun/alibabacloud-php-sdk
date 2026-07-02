<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarFsRequest\tag;

class DescribePolarFsRequest extends Model
{
    /**
     * @var string
     */
    public $DBClusterId;

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
    public $polarFsInstanceDescription;

    /**
     * @var string
     */
    public $polarFsInstanceIds;

    /**
     * @var string
     */
    public $polarFsType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $relativeDbClusterId;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'DBClusterId' => 'DBClusterId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'polarFsInstanceDescription' => 'PolarFsInstanceDescription',
        'polarFsInstanceIds' => 'PolarFsInstanceIds',
        'polarFsType' => 'PolarFsType',
        'regionId' => 'RegionId',
        'relativeDbClusterId' => 'RelativeDbClusterId',
        'tag' => 'Tag',
    ];

    public function validate()
    {
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->polarFsInstanceDescription) {
            $res['PolarFsInstanceDescription'] = $this->polarFsInstanceDescription;
        }

        if (null !== $this->polarFsInstanceIds) {
            $res['PolarFsInstanceIds'] = $this->polarFsInstanceIds;
        }

        if (null !== $this->polarFsType) {
            $res['PolarFsType'] = $this->polarFsType;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->relativeDbClusterId) {
            $res['RelativeDbClusterId'] = $this->relativeDbClusterId;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PolarFsInstanceDescription'])) {
            $model->polarFsInstanceDescription = $map['PolarFsInstanceDescription'];
        }

        if (isset($map['PolarFsInstanceIds'])) {
            $model->polarFsInstanceIds = $map['PolarFsInstanceIds'];
        }

        if (isset($map['PolarFsType'])) {
            $model->polarFsType = $map['PolarFsType'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RelativeDbClusterId'])) {
            $model->relativeDbClusterId = $map['RelativeDbClusterId'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1] = tag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
