<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models;

use AlibabaCloud\Tea\Model;

class ListDeviceDistributeJobRequest extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example UbmsMHmkqv0PiAG****010001
     *
     * @var string
     */
    public $jobId;

    /**
     * @example TGlzdFJlc291***
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example a1T27vz****
     *
     * @var string
     */
    public $productKey;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @example 198***
     *
     * @var string
     */
    public $targetUid;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'jobId'       => 'JobId',
        'nextToken'   => 'NextToken',
        'pageSize'    => 'PageSize',
        'productKey'  => 'ProductKey',
        'status'      => 'Status',
        'targetUid'   => 'TargetUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->targetUid) {
            $res['TargetUid'] = $this->targetUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDeviceDistributeJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TargetUid'])) {
            $model->targetUid = $map['TargetUid'];
        }

        return $model;
    }
}
