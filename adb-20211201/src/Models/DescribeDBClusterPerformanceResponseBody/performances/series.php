<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeDBClusterPerformanceResponseBody\performances;

use AlibabaCloud\Tea\Model;

class series extends Model
{
    /**
     * @example AnalyticDB_Storage_CPU_Avg_Usage_Percentage
     *
     * @var string
     */
    public $name;

    /**
     * @example {instance_name: "am-***"}
     *
     * @var string
     */
    public $tags;

    /**
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
