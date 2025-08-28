<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeBackupsResponseBody\accessDeniedDetail;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeBackupsResponseBody\backups;

class DescribeBackupsResponseBody extends Model
{
    /**
     * @var accessDeniedDetail
     */
    public $accessDeniedDetail;

    /**
     * @var backups
     */
    public $backups;

    /**
     * @var int
     */
    public $freeSize;

    /**
     * @var int
     */
    public $fullStorageSize;

    /**
     * @var int
     */
    public $logStorageSize;

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
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'backups' => 'Backups',
        'freeSize' => 'FreeSize',
        'fullStorageSize' => 'FullStorageSize',
        'logStorageSize' => 'LogStorageSize',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (null !== $this->accessDeniedDetail) {
            $this->accessDeniedDetail->validate();
        }
        if (null !== $this->backups) {
            $this->backups->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['AccessDeniedDetail'] = null !== $this->accessDeniedDetail ? $this->accessDeniedDetail->toArray($noStream) : $this->accessDeniedDetail;
        }

        if (null !== $this->backups) {
            $res['Backups'] = null !== $this->backups ? $this->backups->toArray($noStream) : $this->backups;
        }

        if (null !== $this->freeSize) {
            $res['FreeSize'] = $this->freeSize;
        }

        if (null !== $this->fullStorageSize) {
            $res['FullStorageSize'] = $this->fullStorageSize;
        }

        if (null !== $this->logStorageSize) {
            $res['LogStorageSize'] = $this->logStorageSize;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['AccessDeniedDetail'])) {
            $model->accessDeniedDetail = accessDeniedDetail::fromMap($map['AccessDeniedDetail']);
        }

        if (isset($map['Backups'])) {
            $model->backups = backups::fromMap($map['Backups']);
        }

        if (isset($map['FreeSize'])) {
            $model->freeSize = $map['FreeSize'];
        }

        if (isset($map['FullStorageSize'])) {
            $model->fullStorageSize = $map['FullStorageSize'];
        }

        if (isset($map['LogStorageSize'])) {
            $model->logStorageSize = $map['LogStorageSize'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
