<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeBackupsResponseBody\accessDeniedDetail;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeBackupsResponseBody\backups;
use AlibabaCloud\Tea\Model;

class DescribeBackupsResponseBody extends Model
{
    /**
     * @description The following parameters are no longer used. Ignore the parameters.
     *
     * @var accessDeniedDetail
     */
    public $accessDeniedDetail;

    /**
     * @description Details of the backup files.
     *
     * @var backups
     */
    public $backups;

    /**
     * @description This parameter does not take effect. Ignore this parameter.
     *
     * @example 100000
     *
     * @var int
     */
    public $freeSize;

    /**
     * @description The size of the full backup file of the instance. Unit: bytes. Full backups originate from scheduled backups, manual backups, and backups generated during cache analysis.
     *
     * >  The value of this parameter is independent of the number and size of the returned backup sets. Instead, it reflects the total size of all valid full backups of the instance.
     * @example 1000
     *
     * @var int
     */
    public $fullStorageSize;

    /**
     * @description The size of the log backup file of the instance. Unit: bytes. This value is valid only when flashback is enabled.
     *
     * >  The value of this parameter is independent of the number and size of the returned backup sets. Instead, it reflects the total size of all valid log backups of the instance.
     * @example 5000
     *
     * @var int
     */
    public $logStorageSize;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned on each page.
     *
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request.
     *
     * @example 963C20F0-7CE1-4591-AAF3-6F3CD1CE****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of backup files that were returned.
     *
     * @example 5
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'backups'            => 'Backups',
        'freeSize'           => 'FreeSize',
        'fullStorageSize'    => 'FullStorageSize',
        'logStorageSize'     => 'LogStorageSize',
        'pageNumber'         => 'PageNumber',
        'pageSize'           => 'PageSize',
        'requestId'          => 'RequestId',
        'totalCount'         => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['AccessDeniedDetail'] = null !== $this->accessDeniedDetail ? $this->accessDeniedDetail->toMap() : null;
        }
        if (null !== $this->backups) {
            $res['Backups'] = null !== $this->backups ? $this->backups->toMap() : null;
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

    /**
     * @param array $map
     *
     * @return DescribeBackupsResponseBody
     */
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
