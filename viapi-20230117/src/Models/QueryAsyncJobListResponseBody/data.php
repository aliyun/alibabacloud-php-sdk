<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapi\V20230117\Models\QueryAsyncJobListResponseBody;

use AlibabaCloud\SDK\Viapi\V20230117\Models\QueryAsyncJobListResponseBody\data\result;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var result[]
     */
    public $result;

    /**
     * @example 2
     *
     * @var int
     */
    public $totalPage;

    /**
     * @example 22
     *
     * @var int
     */
    public $totalRecord;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'pageSize'    => 'PageSize',
        'result'      => 'Result',
        'totalPage'   => 'TotalPage',
        'totalRecord' => 'TotalRecord',
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
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->result) {
            $res['Result'] = [];
            if (null !== $this->result && \is_array($this->result)) {
                $n = 0;
                foreach ($this->result as $item) {
                    $res['Result'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalPage) {
            $res['TotalPage'] = $this->totalPage;
        }
        if (null !== $this->totalRecord) {
            $res['TotalRecord'] = $this->totalRecord;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Result'])) {
            if (!empty($map['Result'])) {
                $model->result = [];
                $n             = 0;
                foreach ($map['Result'] as $item) {
                    $model->result[$n++] = null !== $item ? result::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TotalPage'])) {
            $model->totalPage = $map['TotalPage'];
        }
        if (isset($map['TotalRecord'])) {
            $model->totalRecord = $map['TotalRecord'];
        }

        return $model;
    }
}
