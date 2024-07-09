<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class ListChangeRequestsResponseBody extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $current;

    /**
     * @var mixed[]
     */
    public $data;

    /**
     * @example eb13ac6049d3d78159d60f84af
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 5
     *
     * @var int
     */
    public $pages;

    /**
     * @example 20
     *
     * @var int
     */
    public $perPage;

    /**
     * @example 100
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'current'   => 'current',
        'data'      => 'data',
        'nextToken' => 'nextToken',
        'pages'     => 'pages',
        'perPage'   => 'perPage',
        'total'     => 'total',
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
        if (null !== $this->data) {
            $res['data'] = $this->data;
        }
        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }
        if (null !== $this->pages) {
            $res['pages'] = $this->pages;
        }
        if (null !== $this->perPage) {
            $res['perPage'] = $this->perPage;
        }
        if (null !== $this->total) {
            $res['total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListChangeRequestsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['current'])) {
            $model->current = $map['current'];
        }
        if (isset($map['data'])) {
            if (!empty($map['data'])) {
                $model->data = $map['data'];
            }
        }
        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }
        if (isset($map['pages'])) {
            $model->pages = $map['pages'];
        }
        if (isset($map['perPage'])) {
            $model->perPage = $map['perPage'];
        }
        if (isset($map['total'])) {
            $model->total = $map['total'];
        }

        return $model;
    }
}
