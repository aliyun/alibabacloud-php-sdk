<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class ListStatisticReportRequest extends Model
{
    /**
     * @description pv,uv
     *
     * @example pv,uv
     *
     * @var string
     */
    public $columns;

    /**
     * @description 1582646399
     *
     * @example 1582646399
     *
     * @var int
     */
    public $endTime;

    /**
     * @description 1
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 10
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description bizType:test,sceneTag:myTag
     *
     * @example bizType:test,sceneTag:myTag
     *
     * @var string
     */
    public $query;

    /**
     * @description 1582214400
     *
     * @example 1582214400
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'columns'    => 'columns',
        'endTime'    => 'endTime',
        'pageNumber' => 'pageNumber',
        'pageSize'   => 'pageSize',
        'query'      => 'query',
        'startTime'  => 'startTime',
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
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
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
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListStatisticReportRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['columns'])) {
            $model->columns = $map['columns'];
        }
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
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
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        return $model;
    }
}
