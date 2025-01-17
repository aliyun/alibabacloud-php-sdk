<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class ListTranscodeJobsRequest extends Model
{
    /**
     * @var string
     */
    public $endOfCreateTime;
    /**
     * @var string
     */
    public $nextPageToken;
    /**
     * @var string
     */
    public $orderBy;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $parentJobId;
    /**
     * @var string
     */
    public $startOfCreateTime;
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'endOfCreateTime'   => 'EndOfCreateTime',
        'nextPageToken'     => 'NextPageToken',
        'orderBy'           => 'OrderBy',
        'pageSize'          => 'PageSize',
        'parentJobId'       => 'ParentJobId',
        'startOfCreateTime' => 'StartOfCreateTime',
        'status'            => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endOfCreateTime) {
            $res['EndOfCreateTime'] = $this->endOfCreateTime;
        }

        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }

        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->parentJobId) {
            $res['ParentJobId'] = $this->parentJobId;
        }

        if (null !== $this->startOfCreateTime) {
            $res['StartOfCreateTime'] = $this->startOfCreateTime;
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
        if (isset($map['EndOfCreateTime'])) {
            $model->endOfCreateTime = $map['EndOfCreateTime'];
        }

        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }

        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ParentJobId'])) {
            $model->parentJobId = $map['ParentJobId'];
        }

        if (isset($map['StartOfCreateTime'])) {
            $model->startOfCreateTime = $map['StartOfCreateTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
