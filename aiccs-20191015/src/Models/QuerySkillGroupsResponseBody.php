<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\SDK\Aiccs\V20191015\Models\QuerySkillGroupsResponseBody\data;
use AlibabaCloud\Tea\Model;

class QuerySkillGroupsResponseBody extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @var data[]
     */
    public $data;

    /**
     * @example 20
     *
     * @var int
     */
    public $onePageSize;

    /**
     * @example EE338D98-9BD3-4413-B165
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 4
     *
     * @var int
     */
    public $totalPage;

    /**
     * @example 76
     *
     * @var int
     */
    public $totalResults;
    protected $_name = [
        'currentPage'  => 'CurrentPage',
        'data'         => 'Data',
        'onePageSize'  => 'OnePageSize',
        'requestId'    => 'RequestId',
        'totalPage'    => 'TotalPage',
        'totalResults' => 'TotalResults',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->data) {
            $res['Data'] = [];
            if (null !== $this->data && \is_array($this->data)) {
                $n = 0;
                foreach ($this->data as $item) {
                    $res['Data'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->onePageSize) {
            $res['OnePageSize'] = $this->onePageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalPage) {
            $res['TotalPage'] = $this->totalPage;
        }
        if (null !== $this->totalResults) {
            $res['TotalResults'] = $this->totalResults;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QuerySkillGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                $n           = 0;
                foreach ($map['Data'] as $item) {
                    $model->data[$n++] = null !== $item ? data::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OnePageSize'])) {
            $model->onePageSize = $map['OnePageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalPage'])) {
            $model->totalPage = $map['TotalPage'];
        }
        if (isset($map['TotalResults'])) {
            $model->totalResults = $map['TotalResults'];
        }

        return $model;
    }
}
