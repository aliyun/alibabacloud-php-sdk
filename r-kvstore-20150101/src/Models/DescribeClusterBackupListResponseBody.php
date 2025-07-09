<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeClusterBackupListResponseBody\clusterBackups;

class DescribeClusterBackupListResponseBody extends Model
{
    /**
     * @var clusterBackups[]
     */
    public $clusterBackups;

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
    public $maxResults;

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
    protected $_name = [
        'clusterBackups' => 'ClusterBackups',
        'freeSize' => 'FreeSize',
        'fullStorageSize' => 'FullStorageSize',
        'logStorageSize' => 'LogStorageSize',
        'maxResults' => 'MaxResults',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->clusterBackups)) {
            Model::validateArray($this->clusterBackups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterBackups) {
            if (\is_array($this->clusterBackups)) {
                $res['ClusterBackups'] = [];
                $n1 = 0;
                foreach ($this->clusterBackups as $item1) {
                    $res['ClusterBackups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterBackups'])) {
            if (!empty($map['ClusterBackups'])) {
                $model->clusterBackups = [];
                $n1 = 0;
                foreach ($map['ClusterBackups'] as $item1) {
                    $model->clusterBackups[$n1] = clusterBackups::fromMap($item1);
                    ++$n1;
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
