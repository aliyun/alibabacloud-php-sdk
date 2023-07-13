<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLogMonitorListRequest extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 123456
     *
     * @var int
     */
    public $groupId;

    /**
     * @description The number of entries to return on each page. Default value: 10
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The keyword that is used to search for log monitoring metrics. Fuzzy match is supported.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the application group.
     *
     * @example test
     *
     * @var string
     */
    public $searchValue;
    protected $_name = [
        'groupId'     => 'GroupId',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'regionId'    => 'RegionId',
        'searchValue' => 'SearchValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->searchValue) {
            $res['SearchValue'] = $this->searchValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLogMonitorListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SearchValue'])) {
            $model->searchValue = $map['SearchValue'];
        }

        return $model;
    }
}
