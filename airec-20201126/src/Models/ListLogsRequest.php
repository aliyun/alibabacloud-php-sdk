<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models;

use AlibabaCloud\Tea\Model;

class ListLogsRequest extends Model
{
    /**
     * @example 1586673466
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @example requestId:xxxx;requestUri:xxx;
     *
     * @var string
     */
    public $queryParams;

    /**
     * @example 10
     *
     * @var int
     */
    public $size;

    /**
     * @example 1586673466
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'endTime'     => 'endTime',
        'page'        => 'page',
        'queryParams' => 'queryParams',
        'size'        => 'size',
        'startTime'   => 'startTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->page) {
            $res['page'] = $this->page;
        }
        if (null !== $this->queryParams) {
            $res['queryParams'] = $this->queryParams;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLogsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['page'])) {
            $model->page = $map['page'];
        }
        if (isset($map['queryParams'])) {
            $model->queryParams = $map['queryParams'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        return $model;
    }
}
