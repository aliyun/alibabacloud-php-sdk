<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class ListStatisticLogsRequest extends Model
{
    /**
     * @var string
     */
    public $columns;

    /**
     * @var bool
     */
    public $distinct;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $query;

    /**
     * @var string
     */
    public $sortBy;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $stopTime;
    protected $_name = [
        'columns'    => 'columns',
        'distinct'   => 'distinct',
        'pageNumber' => 'pageNumber',
        'pageSize'   => 'pageSize',
        'query'      => 'query',
        'sortBy'     => 'sortBy',
        'startTime'  => 'startTime',
        'stopTime'   => 'stopTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->columns) {
            $res['columns'] = $this->columns;
        }
        if (null !== $this->distinct) {
            $res['distinct'] = $this->distinct;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->query) {
            $res['query'] = $this->query;
        }
        if (null !== $this->sortBy) {
            $res['sortBy'] = $this->sortBy;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }
        if (null !== $this->stopTime) {
            $res['stopTime'] = $this->stopTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListStatisticLogsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['columns'])) {
            $model->columns = $map['columns'];
        }
        if (isset($map['distinct'])) {
            $model->distinct = $map['distinct'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['query'])) {
            $model->query = $map['query'];
        }
        if (isset($map['sortBy'])) {
            $model->sortBy = $map['sortBy'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }
        if (isset($map['stopTime'])) {
            $model->stopTime = $map['stopTime'];
        }

        return $model;
    }
}
