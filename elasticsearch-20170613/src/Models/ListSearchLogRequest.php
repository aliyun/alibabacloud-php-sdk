<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class ListSearchLogRequest extends Model
{
    /**
     * @description 20
     *
     * @example 1531910852074
     *
     * @var int
     */
    public $beginTime;

    /**
     * @description The ID of the request.
     *
     * @example 1531910852074
     *
     * @var int
     */
    public $endTime;

    /**
     * @description The header of the response.
     *
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @description 1
     *
     * @example host:172.16.**.** AND content:netty
     *
     * @var string
     */
    public $query;

    /**
     * @description The number of entries returned per page.
     *
     * @example 20
     *
     * @var int
     */
    public $size;

    /**
     * @description 1531910852074
     *
     * @example INSTANCELOG
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
     * @return ListSearchLogRequest
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
