<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models;

use AlibabaCloud\SDK\GEMP\V20210413\Models\ListSourceEventsResponseBody\data;
use AlibabaCloud\Tea\Model;

class ListSourceEventsResponseBody extends Model
{
    /**
     * @var data[]
     */
    public $data;

    /**
     * @description firstRowKey
     *
     * @var string
     */
    public $firstRowKey;

    /**
     * @description lastRowKey
     *
     * @var string
     */
    public $lastRowKey;

    /**
     * @description 当前页
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 页大小
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description 请求ID
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 总条数
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'data'        => 'data',
        'firstRowKey' => 'firstRowKey',
        'lastRowKey'  => 'lastRowKey',
        'pageNumber'  => 'pageNumber',
        'pageSize'    => 'pageSize',
        'requestId'   => 'requestId',
        'totalCount'  => 'totalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->data) {
            $res['data'] = [];
            if (null !== $this->data && \is_array($this->data)) {
                $n = 0;
                foreach ($this->data as $item) {
                    $res['data'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->firstRowKey) {
            $res['firstRowKey'] = $this->firstRowKey;
        }
        if (null !== $this->lastRowKey) {
            $res['lastRowKey'] = $this->lastRowKey;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['totalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSourceEventsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['data'])) {
            if (!empty($map['data'])) {
                $model->data = [];
                $n           = 0;
                foreach ($map['data'] as $item) {
                    $model->data[$n++] = null !== $item ? data::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['firstRowKey'])) {
            $model->firstRowKey = $map['firstRowKey'];
        }
        if (isset($map['lastRowKey'])) {
            $model->lastRowKey = $map['lastRowKey'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['totalCount'])) {
            $model->totalCount = $map['totalCount'];
        }

        return $model;
    }
}
