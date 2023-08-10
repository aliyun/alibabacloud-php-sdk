<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class ListStatisticLogsRequest extends Model
{
    /**
     * @description The fields to query. Example: columns=wordsTopPv.
     *
     * For more information, see [Metrics in statistical reports](https://www.alibabacloud.com/help/en/opensearch/latest/statistical-report).
     * @example wordsTopPv
     *
     * @var string
     */
    public $columns;

    /**
     * @description The content of the query clause.
     *
     * @example true
     *
     * @var bool
     */
    public $distinct;

    /**
     * @description The number of the page to return. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The content of the query clause.
     *
     * @example "default:\"OpenSearch\""
     *
     * @var string
     */
    public $query;

    /**
     * @description The content of the sort clause.
     *
     * @example "-id"
     *
     * @var string
     */
    public $sortBy;

    /**
     * @description The beginning of the time range to query. The default value is the timestamp of 00:00:00 on the current day.
     *
     * @example 1582214400
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The end of the time range to query. The default value is the timestamp of 24:00:00 on the current day.
     *
     * @example 1682222400
     *
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
