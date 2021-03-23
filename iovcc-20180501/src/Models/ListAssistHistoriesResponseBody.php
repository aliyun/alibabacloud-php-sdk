<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\ListAssistHistoriesResponseBody\histories;
use AlibabaCloud\Tea\Model;

class ListAssistHistoriesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageIndex;

    /**
     * @var int
     */
    public $perPage;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var histories[]
     */
    public $histories;
    protected $_name = [
        'requestId'  => 'RequestId',
        'pageIndex'  => 'PageIndex',
        'perPage'    => 'PerPage',
        'totalCount' => 'TotalCount',
        'histories'  => 'Histories',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageIndex) {
            $res['PageIndex'] = $this->pageIndex;
        }
        if (null !== $this->perPage) {
            $res['PerPage'] = $this->perPage;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->histories) {
            $res['Histories'] = [];
            if (null !== $this->histories && \is_array($this->histories)) {
                $n = 0;
                foreach ($this->histories as $item) {
                    $res['Histories'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAssistHistoriesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageIndex'])) {
            $model->pageIndex = $map['PageIndex'];
        }
        if (isset($map['PerPage'])) {
            $model->perPage = $map['PerPage'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['Histories'])) {
            if (!empty($map['Histories'])) {
                $model->histories = [];
                $n                = 0;
                foreach ($map['Histories'] as $item) {
                    $model->histories[$n++] = null !== $item ? histories::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
