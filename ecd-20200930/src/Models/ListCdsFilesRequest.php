<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ListCdsFilesRequest extends Model
{
    /**
     * @example cn-hangzhou+cds-320357****
     *
     * @var string
     */
    public $cdsId;

    /**
     * @example testUser
     *
     * @var string
     */
    public $endUserId;

    /**
     * @var string[]
     */
    public $fileIds;

    /**
     * @example 100
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example WyI2Mzg4MjAwMzFhNGQwZWVmN2I3MjRkZjZhZjAyMWU4YzY1MmRjZmUyIiwibiIsIm4iLDEsLTEsMTY2OTg2NTQ3NTMxMiwiNjM4ODIwMDNlNTU0YmZiZjFkYTk0MmEyYTZhMjEyZDkxODdjMjAy****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example CreateTimeDesc
     *
     * @var string
     */
    public $orderType;

    /**
     * @example 63636837e47e5a24a8a940218bef395c210e****
     *
     * @var string
     */
    public $parentFileId;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example available
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'cdsId'        => 'CdsId',
        'endUserId'    => 'EndUserId',
        'fileIds'      => 'FileIds',
        'maxResults'   => 'MaxResults',
        'nextToken'    => 'NextToken',
        'orderType'    => 'OrderType',
        'parentFileId' => 'ParentFileId',
        'regionId'     => 'RegionId',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cdsId) {
            $res['CdsId'] = $this->cdsId;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->fileIds) {
            $res['FileIds'] = $this->fileIds;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }
        if (null !== $this->parentFileId) {
            $res['ParentFileId'] = $this->parentFileId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCdsFilesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CdsId'])) {
            $model->cdsId = $map['CdsId'];
        }
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }
        if (isset($map['FileIds'])) {
            if (!empty($map['FileIds'])) {
                $model->fileIds = $map['FileIds'];
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }
        if (isset($map['ParentFileId'])) {
            $model->parentFileId = $map['ParentFileId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
