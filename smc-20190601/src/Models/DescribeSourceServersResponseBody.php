<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models;

use AlibabaCloud\SDK\Smc\V20190601\Models\DescribeSourceServersResponseBody\sourceServers;
use AlibabaCloud\Tea\Model;

class DescribeSourceServersResponseBody extends Model
{
    /**
     * @var sourceServers
     */
    public $sourceServers;

    /**
     * @var int
     */
    public $totalCount;

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
    public $pageNumber;
    protected $_name = [
        'sourceServers' => 'SourceServers',
        'totalCount'    => 'TotalCount',
        'pageSize'      => 'PageSize',
        'requestId'     => 'RequestId',
        'pageNumber'    => 'PageNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceServers) {
            $res['SourceServers'] = null !== $this->sourceServers ? $this->sourceServers->toMap() : null;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSourceServersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceServers'])) {
            $model->sourceServers = sourceServers::fromMap($map['SourceServers']);
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        return $model;
    }
}
