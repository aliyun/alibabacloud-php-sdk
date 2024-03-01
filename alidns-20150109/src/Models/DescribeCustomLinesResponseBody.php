<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCustomLinesResponseBody\customLines;
use AlibabaCloud\Tea\Model;

class DescribeCustomLinesResponseBody extends Model
{
    /**
     * @description The custom lines.
     *
     * @var customLines[]
     */
    public $customLines;

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
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The request ID.
     *
     * @example B57C121B-A45F-44D8-A9B2-13E5A5044195
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of custom lines.
     *
     * @example 1
     *
     * @var int
     */
    public $totalItems;

    /**
     * @description The total number of returned pages.
     *
     * @example 1
     *
     * @var int
     */
    public $totalPages;
    protected $_name = [
        'customLines' => 'CustomLines',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'requestId'   => 'RequestId',
        'totalItems'  => 'TotalItems',
        'totalPages'  => 'TotalPages',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customLines) {
            $res['CustomLines'] = [];
            if (null !== $this->customLines && \is_array($this->customLines)) {
                $n = 0;
                foreach ($this->customLines as $item) {
                    $res['CustomLines'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (null !== $this->totalItems) {
            $res['TotalItems'] = $this->totalItems;
        }
        if (null !== $this->totalPages) {
            $res['TotalPages'] = $this->totalPages;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCustomLinesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomLines'])) {
            if (!empty($map['CustomLines'])) {
                $model->customLines = [];
                $n                  = 0;
                foreach ($map['CustomLines'] as $item) {
                    $model->customLines[$n++] = null !== $item ? customLines::fromMap($item) : $item;
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
        if (isset($map['TotalItems'])) {
            $model->totalItems = $map['TotalItems'];
        }
        if (isset($map['TotalPages'])) {
            $model->totalPages = $map['TotalPages'];
        }

        return $model;
    }
}
