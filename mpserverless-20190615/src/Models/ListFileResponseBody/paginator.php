<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPServerless\V20190615\Models\ListFileResponseBody;

use AlibabaCloud\Tea\Model;

class paginator extends Model
{
    /**
     * @example eyJhY2NvdW50IjoiMTE2MTQwNTMxMDE0OTY2OCIsImV2ZW50SWQiOiIzMkI3QTE1Mi05NUJFLTUyNkMtQjEyNC00RUYxRDk2RDM4QkEiLCJsb2dJZCI6IjE0LTExNjE0MDUzMTAxNDk2NjgiLCJ0aW1lIjoxNjM1MjEzMzk0MDAwfQ
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'nextToken' => 'NextToken',
        'pageSize'  => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return paginator
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
