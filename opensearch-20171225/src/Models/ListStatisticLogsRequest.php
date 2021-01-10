<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class ListStatisticLogsRequest extends Model
{
    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $stopTime;

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
     * @var bool
     */
    public $distinct;

    /**
     * @var string
     */
    public $columns;
    protected $_name = [
        'startTime'  => 'startTime',
        'stopTime'   => 'stopTime',
        'pageNumber' => 'pageNumber',
        'pageSize'   => 'pageSize',
        'query'      => 'query',
        'sortBy'     => 'sortBy',
        'distinct'   => 'distinct',
        'columns'    => 'columns',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }
        if (null !== $this->stopTime) {
            $res['stopTime'] = $this->stopTime;
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
        if (null !== $this->distinct) {
            $res['distinct'] = $this->distinct;
        }
        if (null !== $this->columns) {
            $res['columns'] = $this->columns;
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
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }
        if (isset($map['stopTime'])) {
            $model->stopTime = $map['stopTime'];
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
        if (isset($map['distinct'])) {
            $model->distinct = $map['distinct'];
        }
        if (isset($map['columns'])) {
            $model->columns = $map['columns'];
        }

        return $model;
    }
}
