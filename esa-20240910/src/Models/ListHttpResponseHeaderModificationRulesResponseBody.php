<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\ListHttpResponseHeaderModificationRulesResponseBody\configs;
use AlibabaCloud\Tea\Model;

class ListHttpResponseHeaderModificationRulesResponseBody extends Model
{
    /**
     * @description List of modified HTTP response headers.
     *
     * @var configs[]
     */
    public $configs;

    /**
     * @description Page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description Page size.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Request ID.
     *
     * @example CB1A380B-09F0-41BB-280B-72F8FD6DA2FE
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Total count.
     *
     * @example 14
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description Total pages.
     *
     * @example 1
     *
     * @var int
     */
    public $totalPage;
    protected $_name = [
        'configs' => 'Configs',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
        'totalPage' => 'TotalPage',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->configs) {
            $res['Configs'] = [];
            if (null !== $this->configs && \is_array($this->configs)) {
                $n = 0;
                foreach ($this->configs as $item) {
                    $res['Configs'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (null !== $this->totalPage) {
            $res['TotalPage'] = $this->totalPage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListHttpResponseHeaderModificationRulesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Configs'])) {
            if (!empty($map['Configs'])) {
                $model->configs = [];
                $n = 0;
                foreach ($map['Configs'] as $item) {
                    $model->configs[$n++] = null !== $item ? configs::fromMap($item) : $item;
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
        if (isset($map['TotalPage'])) {
            $model->totalPage = $map['TotalPage'];
        }

        return $model;
    }
}
