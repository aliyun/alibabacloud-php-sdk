<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeForwardTableEntriesResponseBody\forwardTableEntries;
use AlibabaCloud\Tea\Model;

class DescribeForwardTableEntriesResponseBody extends Model
{
    /**
     * @description The details of DNAT entries.
     *
     * @var forwardTableEntries
     */
    public $forwardTableEntries;

    /**
     * @description The page number of the returned page.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request.
     *
     * @example A6C4A8B1-7561-4509-949C-20DEB40D71E6
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of entries returned.
     *
     * @example 5
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'forwardTableEntries' => 'ForwardTableEntries',
        'pageNumber'          => 'PageNumber',
        'pageSize'            => 'PageSize',
        'requestId'           => 'RequestId',
        'totalCount'          => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->forwardTableEntries) {
            $res['ForwardTableEntries'] = null !== $this->forwardTableEntries ? $this->forwardTableEntries->toMap() : null;
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
     * @return DescribeForwardTableEntriesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ForwardTableEntries'])) {
            $model->forwardTableEntries = forwardTableEntries::fromMap($map['ForwardTableEntries']);
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
