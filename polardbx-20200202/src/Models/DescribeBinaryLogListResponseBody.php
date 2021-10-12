<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\SDK\Polardbx\V20200202\Models\DescribeBinaryLogListResponseBody\logList;
use AlibabaCloud\Tea\Model;

class DescribeBinaryLogListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalNumber;

    /**
     * @var logList[]
     */
    public $logList;
    protected $_name = [
        'requestId'   => 'RequestId',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'totalNumber' => 'TotalNumber',
        'logList'     => 'LogList',
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
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalNumber) {
            $res['TotalNumber'] = $this->totalNumber;
        }
        if (null !== $this->logList) {
            $res['LogList'] = [];
            if (null !== $this->logList && \is_array($this->logList)) {
                $n = 0;
                foreach ($this->logList as $item) {
                    $res['LogList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBinaryLogListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalNumber'])) {
            $model->totalNumber = $map['TotalNumber'];
        }
        if (isset($map['LogList'])) {
            if (!empty($map['LogList'])) {
                $model->logList = [];
                $n              = 0;
                foreach ($map['LogList'] as $item) {
                    $model->logList[$n++] = null !== $item ? logList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
