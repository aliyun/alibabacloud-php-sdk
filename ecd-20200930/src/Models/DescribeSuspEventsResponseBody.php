<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeSuspEventsResponseBody\suspEvents;
use AlibabaCloud\Tea\Model;

class DescribeSuspEventsResponseBody extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var string
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var suspEvents[]
     */
    public $suspEvents;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'pageSize'    => 'PageSize',
        'requestId'   => 'RequestId',
        'suspEvents'  => 'SuspEvents',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->suspEvents) {
            $res['SuspEvents'] = [];
            if (null !== $this->suspEvents && \is_array($this->suspEvents)) {
                $n = 0;
                foreach ($this->suspEvents as $item) {
                    $res['SuspEvents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSuspEventsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SuspEvents'])) {
            if (!empty($map['SuspEvents'])) {
                $model->suspEvents = [];
                $n                 = 0;
                foreach ($map['SuspEvents'] as $item) {
                    $model->suspEvents[$n++] = null !== $item ? suspEvents::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
