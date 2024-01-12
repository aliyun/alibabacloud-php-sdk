<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeClusterBackupListResponseBody\clusterBackups;
use AlibabaCloud\Tea\Model;

class DescribeClusterBackupListResponseBody extends Model
{
    /**
     * @var clusterBackups[]
     */
    public $clusterBackups;

    /**
     * @example 4
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example C009DA42-3B19-5B81-963D-1509DE2408DD
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusterBackups' => 'ClusterBackups',
        'maxResults'     => 'MaxResults',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'requestId'      => 'RequestId',
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
