<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class PullDataRequest extends Model
{
    /**
     * @example 1000
     *
     * @var string
     */
    public $count;

    /**
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
    protected $_name = [
        'count'     => 'count',
        'cursor'    => 'cursor',
        'endCursor' => 'endCursor',
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
            $res['endCursor'] = $this->endCursor;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PullDataRequest
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
        if (isset($map['endCursor'])) {
            $model->endCursor = $map['endCursor'];
        }

        return $model;
    }
}
