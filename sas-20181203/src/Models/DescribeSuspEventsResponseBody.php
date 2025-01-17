<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSuspEventsResponseBody\suspEvents;

class DescribeSuspEventsResponseBody extends Model
{
    /**
     * @var int
     */
    public $count;
    /**
     * @var int
     */
    public $currentPage;
    /**
     * @var int
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
        'count'       => 'Count',
        'currentPage' => 'CurrentPage',
        'pageSize'    => 'PageSize',
        'requestId'   => 'RequestId',
        'suspEvents'  => 'SuspEvents',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->suspEvents)) {
            Model::validateArray($this->suspEvents);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

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
            if (\is_array($this->suspEvents)) {
                $res['SuspEvents'] = [];
                $n1                = 0;
                foreach ($this->suspEvents as $item1) {
                    $res['SuspEvents'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

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
                $n1                = 0;
                foreach ($map['SuspEvents'] as $item1) {
                    $model->suspEvents[$n1++] = suspEvents::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
