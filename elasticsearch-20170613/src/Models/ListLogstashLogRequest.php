<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class ListLogstashLogRequest extends Model
{
    /**
     * @example 1531910852074
     *
     * @var int
     */
    public $beginTime;

    /**
     * @example 1531910852074
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
     * @example host:10.7.xx.xx AND level:info AND content:opening
     *
     * @var string
     */
    public $query;

    /**
     * @example 20
     *
     * @var int
     */
    public $size;

    /**
     * @example LOGSTASH_INSTANCE_LOG
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'beginTime' => 'beginTime',
        'endTime'   => 'endTime',
        'page'      => 'page',
        'query'     => 'query',
        'size'      => 'size',
        'type'      => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beginTime) {
            $res['beginTime'] = $this->beginTime;
        }
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->page) {
            $res['page'] = $this->page;
        }
        if (null !== $this->query) {
            $res['query'] = $this->query;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLogstashLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['beginTime'])) {
            $model->beginTime = $map['beginTime'];
        }
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['page'])) {
            $model->page = $map['page'];
        }
        if (isset($map['query'])) {
            $model->query = $map['query'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
