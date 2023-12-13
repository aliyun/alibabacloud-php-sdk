<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models;

use AlibabaCloud\SDK\Dds\V20151201\Models\DescribeClusterBackupsResponseBody\clusterBackups;
use AlibabaCloud\Tea\Model;

class DescribeClusterBackupsResponseBody extends Model
{
    /**
     * @description The cluster backup sets. A cluster backup file contains the backup sets of each node.
     *
     * @var clusterBackups[]
     */
    public $clusterBackups;

    /**
     * @description The maximum number of entries returned.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The page number of the page returned.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The maximum number of entries returned.
     *
     * @example 30
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request.
     *
     * @example 2F42BB4E-461F-5B55-A37C-53B1141C****
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
     * @return DescribeClusterBackupsResponseBody
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
