<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\ListPluginsResponseBody;

use AlibabaCloud\Tea\Model;

class headers extends Model
{
    /**
     * @example 2
     *
     * @var int
     */
    public $xTotalCount;
    protected $_name = [
        'xTotalCount' => 'X-Total-Count',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->xTotalCount) {
            $res['X-Total-Count'] = $this->xTotalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return headers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['X-Total-Count'])) {
            $model->xTotalCount = $map['X-Total-Count'];
        }

        return $model;
    }
}
