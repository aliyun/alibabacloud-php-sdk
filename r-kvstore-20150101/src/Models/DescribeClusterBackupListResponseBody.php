<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeClusterBackupListResponseBody\clusterBackups;
use AlibabaCloud\Tea\Model;

class DescribeClusterBackupListResponseBody extends Model
{
    /**
     * @description The backup sets of the instance. An instance backup contains the backup sets of all nodes in the instance.
     *
     * @var clusterBackups[]
     */
    public $clusterBackups;

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
     * >  The value of this parameter is independent of the number and size of returned backup sets. Instead, it represents the size of all valid full backups of the instance.
     * @example 1000
     *
     * @var int
     */
    public $fullStorageSize;

    /**
     * @description The size of the log backup file of the instance. Unit: bytes. This parameter is valid only when flashback is enabled.
     *
     * >  The value of this parameter is independent of the number and size of returned backup sets. Instead, it represents the size of all valid log backups of the instance.
     * @example 5000
     *
     * @var int
     */
    public $logStorageSize;

    /**
     * @description The number of entries to return per page. Valid values: 1 to 100.
     * >If you specify this parameter, PageSize and PageNumber are unavailable.
     * @example 4
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The maximum number of entries returned per page.
     *
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request.
     *
     * @example C009DA42-3B19-5B81-963D-1509DE2408DD
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusterBackups'  => 'ClusterBackups',
        'freeSize'        => 'FreeSize',
        'fullStorageSize' => 'FullStorageSize',
        'logStorageSize'  => 'LogStorageSize',
        'maxResults'      => 'MaxResults',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterBackups) {
            $res['ClusterBackups'] = [];
            if (null !== $this->clusterBackups && \is_array($this->clusterBackups)) {
                $n = 0;
                foreach ($this->clusterBackups as $item) {
                    $res['ClusterBackups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterBackupListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterBackups'])) {
            if (!empty($map['ClusterBackups'])) {
                $model->clusterBackups = [];
                $n                     = 0;
                foreach ($map['ClusterBackups'] as $item) {
                    $model->clusterBackups[$n++] = null !== $item ? clusterBackups::fromMap($item) : $item;
                }
            }
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
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
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

        return $model;
    }
}
