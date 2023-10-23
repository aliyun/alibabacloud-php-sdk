<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeDBClusterPerformanceResponseBody\performances;

use AlibabaCloud\Tea\Model;

class series extends Model
{
    /**
     * @description The name of the performance metric.
     *
     * @example worker_avg_cpu_used
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $tags;

    /**
     * @description The values of the queried performance metrics.
     *
     * @var string[]
     */
    public $values;
    protected $_name = [
        'name'   => 'Name',
        'tags'   => 'Tags',
        'values' => 'Values',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->values) {
            $res['Values'] = $this->values;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return series
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['Values'])) {
            if (!empty($map['Values'])) {
                $model->values = $map['Values'];
            }
        }

        return $model;
    }
}
