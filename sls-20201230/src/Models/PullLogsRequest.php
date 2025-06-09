<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class PullLogsRequest extends Model
{
    /**
     * @var int
     */
    public $count;

    /**
     * @var string
     */
    public $cursor;

    /**
     * @var string
     */
    public $endCursor;

    /**
     * @var string
     */
    public $query;
    protected $_name = [
        'count' => 'count',
        'cursor' => 'cursor',
        'endCursor' => 'end_cursor',
        'query' => 'query',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
