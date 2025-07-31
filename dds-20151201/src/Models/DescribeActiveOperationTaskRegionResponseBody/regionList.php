<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeActiveOperationTaskRegionResponseBody;

use AlibabaCloud\Tea\Model;

class regionList extends Model
{
    /**
     * @description The total number of tasks.
     *
     * @example 1
     *
     * @var int
     */
    public $count;

    /**
     * @description The region ID of the instance.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $region;
    protected $_name = [
        'count' => 'Count',
        'region' => 'Region',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return regionList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        return $model;
    }
}
