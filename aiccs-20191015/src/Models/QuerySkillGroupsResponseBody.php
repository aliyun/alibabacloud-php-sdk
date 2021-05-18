<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\SDK\Aiccs\V20191015\Models\QuerySkillGroupsResponseBody\data;
use AlibabaCloud\Tea\Model;

class QuerySkillGroupsResponseBody extends Model
{
    /**
     * @var int
     */
    public $onePageSize;

    /**
     * @var int
     */
    public $totalPage;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var int
     */
    public $totalResults;

    /**
     * @var data[]
     */
    public $data;
    protected $_name = [
        'onePageSize'  => 'OnePageSize',
        'totalPage'    => 'TotalPage',
        'requestId'    => 'RequestId',
        'currentPage'  => 'CurrentPage',
        'totalResults' => 'TotalResults',
        'data'         => 'Data',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->onePageSize) {
            $res['OnePageSize'] = $this->onePageSize;
        }
        if (null !== $this->totalPage) {
            $res['TotalPage'] = $this->totalPage;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->totalResults) {
            $res['TotalResults'] = $this->totalResults;
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
        if (isset($map['OnePageSize'])) {
            $model->onePageSize = $map['OnePageSize'];
        }
        if (isset($map['TotalPage'])) {
            $model->totalPage = $map['TotalPage'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['TotalResults'])) {
            $model->totalResults = $map['TotalResults'];
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

        return $model;
    }
}
