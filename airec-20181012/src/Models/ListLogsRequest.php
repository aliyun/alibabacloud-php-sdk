<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20181012\Models;

use AlibabaCloud\Tea\Model;

class ListLogsRequest extends Model
{
    /**
     * @var string
     */
    public $queryParams;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $size;
    protected $_name = [
        'queryParams' => 'QueryParams',
        'startTime'   => 'StartTime',
        'endTime'     => 'EndTime',
        'page'        => 'Page',
        'size'        => 'Size',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->queryParams) {
            $res['QueryParams'] = $this->queryParams;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->size) {
            $res['Size'] = $this->size;
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
        if (isset($map['QueryParams'])) {
            $model->queryParams = $map['QueryParams'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        return $model;
    }
}
