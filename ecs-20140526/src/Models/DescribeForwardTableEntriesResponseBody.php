<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeForwardTableEntriesResponseBody\forwardTableEntries;
use AlibabaCloud\Tea\Model;

class DescribeForwardTableEntriesResponseBody extends Model
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
     * @var forwardTableEntries
     */
    public $forwardTableEntries;
    protected $_name = [
        'totalCount'          => 'TotalCount',
        'pageSize'            => 'PageSize',
        'requestId'           => 'RequestId',
        'pageNumber'          => 'PageNumber',
        'forwardTableEntries' => 'ForwardTableEntries',
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
        if (null !== $this->forwardTableEntries) {
            $res['ForwardTableEntries'] = null !== $this->forwardTableEntries ? $this->forwardTableEntries->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeForwardTableEntriesResponseBody
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
        if (isset($map['ForwardTableEntries'])) {
            $model->forwardTableEntries = forwardTableEntries::fromMap($map['ForwardTableEntries']);
        }

        return $model;
    }
}
