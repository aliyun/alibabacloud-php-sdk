<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\GetDocumentChunkListResponseBody;

use AlibabaCloud\SDK\DianJin\V20240628\Models\GetDocumentChunkListResponseBody\data\records;
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
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var records[]
     */
    public $records;

    /**
     * @example 10
     *
     * @var int
     */
    public $totalPages;

    /**
     * @example 100
     *
     * @var int
     */
    public $totalRecords;
    protected $_name = [
        'currentPage'  => 'currentPage',
        'pageSize'     => 'pageSize',
        'records'      => 'records',
        'totalPages'   => 'totalPages',
        'totalRecords' => 'totalRecords',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['currentPage'] = $this->currentPage;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->records) {
            $res['records'] = [];
            if (null !== $this->records && \is_array($this->records)) {
                $n = 0;
                foreach ($this->records as $item) {
                    $res['records'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->totalPages) {
            $res['totalPages'] = $this->totalPages;
        }
        if (null !== $this->totalRecords) {
            $res['totalRecords'] = $this->totalRecords;
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
        if (isset($map['currentPage'])) {
            $model->currentPage = $map['currentPage'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['records'])) {
            if (!empty($map['records'])) {
                $model->records = [];
                $n              = 0;
                foreach ($map['records'] as $item) {
                    $model->records[$n++] = null !== $item ? records::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['totalPages'])) {
            $model->totalPages = $map['totalPages'];
        }
        if (isset($map['totalRecords'])) {
            $model->totalRecords = $map['totalRecords'];
        }

        return $model;
    }
}
