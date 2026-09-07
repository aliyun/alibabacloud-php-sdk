<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class DescribePeripheralDriversRequest extends Model
{
    /**
     * @var string
     */
    public $brand;

    /**
     * @var string
     */
    public $deviceType;

    /**
     * @var string[]
     */
    public $driverIds;

    /**
     * @var string
     */
    public $filter;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $ownerType;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'brand' => 'Brand',
        'deviceType' => 'DeviceType',
        'driverIds' => 'DriverIds',
        'filter' => 'Filter',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'ownerType' => 'OwnerType',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
    ];

    public function validate()
    {
        if (\is_array($this->driverIds)) {
            Model::validateArray($this->driverIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->brand) {
            $res['Brand'] = $this->brand;
        }

        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }

        if (null !== $this->driverIds) {
            if (\is_array($this->driverIds)) {
                $res['DriverIds'] = [];
                $n1 = 0;
                foreach ($this->driverIds as $item1) {
                    $res['DriverIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->filter) {
            $res['Filter'] = $this->filter;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->ownerType) {
            $res['OwnerType'] = $this->ownerType;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['Brand'])) {
            $model->brand = $map['Brand'];
        }

        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }

        if (isset($map['DriverIds'])) {
            if (!empty($map['DriverIds'])) {
                $model->driverIds = [];
                $n1 = 0;
                foreach ($map['DriverIds'] as $item1) {
                    $model->driverIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['OwnerType'])) {
            $model->ownerType = $map['OwnerType'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
