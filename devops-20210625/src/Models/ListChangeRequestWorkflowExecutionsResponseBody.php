<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class ListChangeRequestWorkflowExecutionsResponseBody extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $current;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 10
     *
     * @var int
     */
    public $pages;

    /**
     * @var mixed[]
     */
    public $records;

    /**
     * @example 200
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'current'  => 'current',
        'pageSize' => 'pageSize',
        'pages'    => 'pages',
        'records'  => 'records',
        'total'    => 'total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->current) {
            $res['current'] = $this->current;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->pages) {
            $res['pages'] = $this->pages;
        }
        if (null !== $this->records) {
            $res['records'] = $this->records;
        }
        if (null !== $this->total) {
            $res['total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListChangeRequestWorkflowExecutionsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['current'])) {
            $model->current = $map['current'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['pages'])) {
            $model->pages = $map['pages'];
        }
        if (isset($map['records'])) {
            if (!empty($map['records'])) {
                $model->records = $map['records'];
            }
        }
        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
