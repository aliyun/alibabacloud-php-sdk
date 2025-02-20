<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;

class ListChangeRequestWorkflowExecutionsResponseBody extends Model
{
    /**
     * @var int
     */
    public $current;
    /**
     * @var int
     */
    public $pageSize;
    /**
     * @var int
     */
    public $pages;
    /**
     * @var mixed[]
     */
    public $records;
    /**
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
        if (\is_array($this->records)) {
            Model::validateArray($this->records);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->records)) {
                $res['records'] = [];
                $n1             = 0;
                foreach ($this->records as $item1) {
                    $res['records'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->total) {
            $res['total'] = $this->total;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->records = [];
                $n1             = 0;
                foreach ($map['records'] as $item1) {
                    $model->records[$n1++] = $item1;
                }
            }
        }

        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
