<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\SDK\Ga\V20191120\Models\ListAcceleratorsResponseBody\accelerators;
use AlibabaCloud\Tea\Model;

class ListAcceleratorsResponseBody extends Model
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
     * @var accelerators[]
     */
    public $accelerators;

    /**
     * @var int
     */
    public $pageNumber;
    protected $_name = [
        'totalCount'   => 'TotalCount',
        'pageSize'     => 'PageSize',
        'requestId'    => 'RequestId',
        'accelerators' => 'Accelerators',
        'pageNumber'   => 'PageNumber',
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
        if (null !== $this->accelerators) {
            $res['Accelerators'] = [];
            if (null !== $this->accelerators && \is_array($this->accelerators)) {
                $n = 0;
                foreach ($this->accelerators as $item) {
                    $res['Accelerators'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAcceleratorsResponseBody
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
        if (isset($map['Accelerators'])) {
            if (!empty($map['Accelerators'])) {
                $model->accelerators = [];
                $n                   = 0;
                foreach ($map['Accelerators'] as $item) {
                    $model->accelerators[$n++] = null !== $item ? accelerators::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        return $model;
    }
}
