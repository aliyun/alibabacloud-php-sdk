<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeHaVipsResponseBody\haVips;
use AlibabaCloud\Tea\Model;

class DescribeHaVipsResponseBody extends Model
{
    /**
     * @var haVips[]
     */
    public $haVips;

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
     * @example AAE90880-4970-4D81-A534-A6C0F3631F74
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 49
     *
     * @var string
     */
    public $totalCount;
    protected $_name = [
        'haVips'     => 'HaVips',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
        'requestId'  => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->haVips) {
            $res['HaVips'] = [];
            if (null !== $this->haVips && \is_array($this->haVips)) {
                $n = 0;
                foreach ($this->haVips as $item) {
                    $res['HaVips'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeHaVipsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HaVips'])) {
            if (!empty($map['HaVips'])) {
                $model->haVips = [];
                $n             = 0;
                foreach ($map['HaVips'] as $item) {
                    $model->haVips[$n++] = null !== $item ? haVips::fromMap($item) : $item;
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
