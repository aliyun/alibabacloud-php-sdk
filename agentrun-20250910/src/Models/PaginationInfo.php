<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentRun\V20250910\Models;

use AlibabaCloud\Dara\Model;

class PaginationInfo extends Model
{
    /**
     * @var int
     */
    public $limit;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $total;

    /**
     * @var int
     */
    public $totalPages;
    protected $_name = [
        'limit' => 'limit',
        'page' => 'page',
        'total' => 'total',
        'totalPages' => 'totalPages',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }

        if (null !== $this->page) {
            $res['page'] = $this->page;
        }

        if (null !== $this->total) {
            $res['total'] = $this->total;
        }

        if (null !== $this->totalPages) {
            $res['totalPages'] = $this->totalPages;
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
        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }

        if (isset($map['page'])) {
            $model->page = $map['page'];
        }

        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        if (isset($map['totalPages'])) {
            $model->totalPages = $map['totalPages'];
        }

        return $model;
    }
}
