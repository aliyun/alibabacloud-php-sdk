<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnUserSecDropByMinuteResponseBody\rows;
use AlibabaCloud\Tea\Model;

class DescribeDcdnUserSecDropByMinuteResponseBody extends Model
{
    /**
     * @description The description of HTTP responses.
     *
     * @example OK
     *
     * @var string
     */
    public $description;

    /**
     * @description The total number of entries returned.
     *
     * @example 2
     *
     * @var int
     */
    public $len;

    /**
     * @description The number of the returned page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned on each page.
     *
     * @example 2
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The ID of the request.
     *
     * @example 8143fA8A-B2B2-4915-538D-546B538D25FA
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The array returned.
     *
     * @var rows[]
     */
    public $rows;

    /**
     * @description The total number of entries returned.
     *
     * @example 5738
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'description' => 'Description',
        'len'         => 'Len',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'requestId'   => 'RequestId',
        'rows'        => 'Rows',
        'totalCount'  => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->len) {
            $res['Len'] = $this->len;
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
        if (null !== $this->rows) {
            $res['Rows'] = [];
            if (null !== $this->rows && \is_array($this->rows)) {
                $n = 0;
                foreach ($this->rows as $item) {
                    $res['Rows'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeDcdnUserSecDropByMinuteResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Len'])) {
            $model->len = $map['Len'];
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
        if (isset($map['Rows'])) {
            if (!empty($map['Rows'])) {
                $model->rows = [];
                $n           = 0;
                foreach ($map['Rows'] as $item) {
                    $model->rows[$n++] = null !== $item ? rows::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
