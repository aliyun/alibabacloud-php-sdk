<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeFlowTopResourceResponseBody;

use AlibabaCloud\Tea\Model;

class ruleHitsTopResource extends Model
{
    /**
     * @description The total number of requests received by the protected object in a specified time range.
     *
     * @example 181174784
     *
     * @var int
     */
    public $count;

    /**
     * @description The protected object.
     *
     * @example www.aliyundoc.com
     *
     * @var string
     */
    public $resource;
    protected $_name = [
        'count' => 'Count',
        'resource' => 'Resource',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleHitsTopResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }

        return $model;
    }
}
