<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SWASOPEN\V20200601\Models;

use AlibabaCloud\Tea\Model;

class ListCustomImagesRequest extends Model
{
    /**
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example s-acscasca****
     *
     * @var string
     */
    public $dataSnapshotId;

    /**
     * @example ["fe9c66133a9d4688872869726b52****", "794c230fd3e64ea19f83f4d7a0ad****"]
     *
     * @var string
     */
    public $imageIds;

    /**
     * @example ["test1****", "test2****"]
     *
     * @var string
     */
    public $imageNames;

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
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example s-bp14m09pq8***0g6
     *
     * @var string
     */
    public $systemSnapshotId;
    protected $_name = [
        'clientToken'      => 'ClientToken',
        'dataSnapshotId'   => 'DataSnapshotId',
        'imageIds'         => 'ImageIds',
        'imageNames'       => 'ImageNames',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'regionId'         => 'RegionId',
        'systemSnapshotId' => 'SystemSnapshotId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dataSnapshotId) {
            $res['DataSnapshotId'] = $this->dataSnapshotId;
        }
        if (null !== $this->imageIds) {
            $res['ImageIds'] = $this->imageIds;
        }
        if (null !== $this->imageNames) {
            $res['ImageNames'] = $this->imageNames;
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
        if (null !== $this->systemSnapshotId) {
            $res['SystemSnapshotId'] = $this->systemSnapshotId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCustomImagesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DataSnapshotId'])) {
            $model->dataSnapshotId = $map['DataSnapshotId'];
        }
        if (isset($map['ImageIds'])) {
            $model->imageIds = $map['ImageIds'];
        }
        if (isset($map['ImageNames'])) {
            $model->imageNames = $map['ImageNames'];
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
        if (isset($map['SystemSnapshotId'])) {
            $model->systemSnapshotId = $map['SystemSnapshotId'];
        }

        return $model;
    }
}
