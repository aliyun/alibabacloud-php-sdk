<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeForwardTableEntriesResponseBody\forwardTableEntries;
use AlibabaCloud\Tea\Model;

class DescribeForwardTableEntriesResponseBody extends Model
{
    /**
     * @var forwardTableEntries[]
     */
    public $forwardTableEntries;

    /**
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var string
     */
    public $pageSize;

    /**
     * @example 473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 100
     *
     * @var string
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
            $res['ForwardTableEntries'] = [];
            if (null !== $this->forwardTableEntries && \is_array($this->forwardTableEntries)) {
                $n = 0;
                foreach ($this->forwardTableEntries as $item) {
                    $res['ForwardTableEntries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
            if (!empty($map['ForwardTableEntries'])) {
                $model->forwardTableEntries = [];
                $n                          = 0;
                foreach ($map['ForwardTableEntries'] as $item) {
                    $model->forwardTableEntries[$n++] = null !== $item ? forwardTableEntries::fromMap($item) : $item;
                }
            }
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
