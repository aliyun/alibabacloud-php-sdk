<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCensResponseBody\cens;
use AlibabaCloud\Tea\Model;

class DescribeCensResponseBody extends Model
{
    /**
     * @description Details of the CEN instances.
     *
     * @var cens[]
     */
    public $cens;

    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 50
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The request ID.
     *
     * @example 1CBAFFAB-B697-4049-A9B1-67E1FC5F****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of CEN instances returned.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'cens'       => 'Cens',
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
        if (null !== $this->cens) {
            $res['Cens'] = [];
            if (null !== $this->cens && \is_array($this->cens)) {
                $n = 0;
                foreach ($this->cens as $item) {
                    $res['Cens'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeCensResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cens'])) {
            if (!empty($map['Cens'])) {
                $model->cens = [];
                $n           = 0;
                foreach ($map['Cens'] as $item) {
                    $model->cens[$n++] = null !== $item ? cens::fromMap($item) : $item;
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
