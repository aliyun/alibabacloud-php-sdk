<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\SDK\Cbn\V20170912\Models\DescribeCenVbrHealthCheckResponseBody\vbrHealthChecks;
use AlibabaCloud\Tea\Model;

class DescribeCenVbrHealthCheckResponseBody extends Model
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
     * @var vbrHealthChecks[]
     */
    public $vbrHealthChecks;
    protected $_name = [
        'totalCount'      => 'TotalCount',
        'pageSize'        => 'PageSize',
        'requestId'       => 'RequestId',
        'pageNumber'      => 'PageNumber',
        'vbrHealthChecks' => 'VbrHealthChecks',
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
        if (null !== $this->vbrHealthChecks) {
            $res['VbrHealthChecks'] = [];
            if (null !== $this->vbrHealthChecks && \is_array($this->vbrHealthChecks)) {
                $n = 0;
                foreach ($this->vbrHealthChecks as $item) {
                    $res['VbrHealthChecks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCenVbrHealthCheckResponseBody
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
        if (isset($map['VbrHealthChecks'])) {
            if (!empty($map['VbrHealthChecks'])) {
                $model->vbrHealthChecks = [];
                $n                      = 0;
                foreach ($map['VbrHealthChecks'] as $item) {
                    $model->vbrHealthChecks[$n++] = null !== $item ? vbrHealthChecks::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
