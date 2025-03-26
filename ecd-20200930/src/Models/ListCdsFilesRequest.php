<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class ListCdsFilesRequest extends Model
{
    /**
     * @var string
     */
    public $cdsId;

    /**
     * @var string
     */
    public $endUserId;

    /**
     * @var string[]
     */
    public $fileIds;

    /**
     * @var string
     */
    public $groupId;

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
    public $orderType;

    /**
     * @var string
     */
    public $parentFileId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'cdsId' => 'CdsId',
        'endUserId' => 'EndUserId',
        'fileIds' => 'FileIds',
        'groupId' => 'GroupId',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'orderType' => 'OrderType',
        'parentFileId' => 'ParentFileId',
        'regionId' => 'RegionId',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->fileIds)) {
            Model::validateArray($this->fileIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cdsId) {
            $res['CdsId'] = $this->cdsId;
        }

        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }

        if (null !== $this->fileIds) {
            if (\is_array($this->fileIds)) {
                $res['FileIds'] = [];
                $n1 = 0;
                foreach ($this->fileIds as $item1) {
                    $res['FileIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->fileIds = [];
                $n1 = 0;
                foreach ($map['FileIds'] as $item1) {
                    $model->fileIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
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
