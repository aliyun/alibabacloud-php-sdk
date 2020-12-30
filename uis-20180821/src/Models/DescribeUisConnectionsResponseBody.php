<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Uis\V20180821\Models;

use AlibabaCloud\SDK\Uis\V20180821\Models\DescribeUisConnectionsResponseBody\uisConnections;
use AlibabaCloud\Tea\Model;

class DescribeUisConnectionsResponseBody extends Model
{
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

    /**
     * @var uisConnections
     */
    public $uisConnections;
    protected $_name = [
        'totalCount'     => 'TotalCount',
        'pageSize'       => 'PageSize',
        'requestId'      => 'RequestId',
        'pageNumber'     => 'PageNumber',
        'uisConnections' => 'UisConnections',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->uisConnections) {
            $res['UisConnections'] = null !== $this->uisConnections ? $this->uisConnections->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUisConnectionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['UisConnections'])) {
            $model->uisConnections = uisConnections::fromMap($map['UisConnections']);
        }

        return $model;
    }
}
