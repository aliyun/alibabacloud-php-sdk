<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\ListHttpRequestHeaderModificationRulesResponseBody\configs;
use AlibabaCloud\Tea\Model;

class ListHttpRequestHeaderModificationRulesResponseBody extends Model
{
    /**
     * @description List of HTTP request header modification configurations.
     *
     * @var configs[]
     */
    public $configs;

    /**
     * @description Page number. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description Page size, default **500**, with a range of **1~500**.
     *
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Request ID.
     *
     * @example 35C66C7B-671H-4297-9187-2C4477247A78
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Total number of items.
     *
     * @example 10
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description Total number of pages.
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
     * @return ListHttpRequestHeaderModificationRulesResponseBody
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
