<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class PullLogsRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1000
     *
     * @var int
     */
    public $count;

    /**
     * @description This parameter is required.
     *
     * @example MTQ0NzMyOTQwMTEwMjEzMDkwNA
     *
     * @var string
     */
    public $cursor;

    /**
     * @example MTU1NzA1NzQwMTEwMjEzMDkwCg
     *
     * @var string
     */
    public $endCursor;

    /**
     * @description The SPL statement that is used to filter data. For more information, see [SPL instructions](https://help.aliyun.com/document_detail/2536530.html).
     *
     * @example * | where userId=\\"123\\"
     *
     * @var string
     */
    public $query;
    protected $_name = [
        'count'     => 'count',
        'cursor'    => 'cursor',
        'endCursor' => 'end_cursor',
        'query'     => 'query',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['count'] = $this->count;
        }
        if (null !== $this->cursor) {
            $res['cursor'] = $this->cursor;
        }
        if (null !== $this->endCursor) {
            $res['end_cursor'] = $this->endCursor;
        }
        if (null !== $this->query) {
            $res['query'] = $this->query;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PullLogsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['count'])) {
            $model->count = $map['count'];
        }
        if (isset($map['cursor'])) {
            $model->cursor = $map['cursor'];
        }
        if (isset($map['end_cursor'])) {
            $model->endCursor = $map['end_cursor'];
        }
        if (isset($map['query'])) {
            $model->query = $map['query'];
        }

        return $model;
    }
}
