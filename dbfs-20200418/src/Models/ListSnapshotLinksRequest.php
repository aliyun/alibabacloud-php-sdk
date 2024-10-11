<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418\Models;

use AlibabaCloud\Tea\Model;

class ListSnapshotLinksRequest extends Model
{
    /**
     * @example FsId
     *
     * @var string
     */
    public $filterKey;

    /**
     * @example dbfs-kwziq4dpsle********
     *
     * @var string
     */
    public $filterValue;

    /**
     * @example ["dbfs-kwziq4dpsle********","dbfs-vuaqvfcjqsg********"]
     *
     * @var string
     */
    public $fsIds;

    /**
     * @example ["sl-bp1grgphbcc9brb5****","sl-bp1c4izumvq0i5bs****","sl-bp1akk7isz866dds****"]
     *
     * @var string
     */
    public $linkIds;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'filterKey'   => 'FilterKey',
        'filterValue' => 'FilterValue',
        'fsIds'       => 'FsIds',
        'linkIds'     => 'LinkIds',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'regionId'    => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->filterKey) {
            $res['FilterKey'] = $this->filterKey;
        }
        if (null !== $this->filterValue) {
            $res['FilterValue'] = $this->filterValue;
        }
        if (null !== $this->fsIds) {
            $res['FsIds'] = $this->fsIds;
        }
        if (null !== $this->linkIds) {
            $res['LinkIds'] = $this->linkIds;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSnapshotLinksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FilterKey'])) {
            $model->filterKey = $map['FilterKey'];
        }
        if (isset($map['FilterValue'])) {
            $model->filterValue = $map['FilterValue'];
        }
        if (isset($map['FsIds'])) {
            $model->fsIds = $map['FsIds'];
        }
        if (isset($map['LinkIds'])) {
            $model->linkIds = $map['LinkIds'];
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

        return $model;
    }
}
