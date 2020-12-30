<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Uis\V20180821\Models;

use AlibabaCloud\SDK\Uis\V20180821\Models\DescribeHighPriorityIpsResponseBody\highPriorityIps;
use AlibabaCloud\Tea\Model;

class DescribeHighPriorityIpsResponseBody extends Model
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
     * @var highPriorityIps
     */
    public $highPriorityIps;
    protected $_name = [
        'totalCount'      => 'TotalCount',
        'pageSize'        => 'PageSize',
        'requestId'       => 'RequestId',
        'pageNumber'      => 'PageNumber',
        'highPriorityIps' => 'HighPriorityIps',
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
        if (null !== $this->highPriorityIps) {
            $res['HighPriorityIps'] = null !== $this->highPriorityIps ? $this->highPriorityIps->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHighPriorityIpsResponseBody
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
        if (isset($map['HighPriorityIps'])) {
            $model->highPriorityIps = highPriorityIps::fromMap($map['HighPriorityIps']);
        }

        return $model;
    }
}
