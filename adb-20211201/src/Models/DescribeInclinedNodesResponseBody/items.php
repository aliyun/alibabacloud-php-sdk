<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeInclinedNodesResponseBody;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @example 90.5
     *
     * @var string
     */
    public $diskUsageRatio;

    /**
     * @example Node1
     *
     * @var string
     */
    public $node;
    protected $_name = [
        'diskUsageRatio' => 'DiskUsageRatio',
        'node'           => 'Node',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskUsageRatio) {
            $res['DiskUsageRatio'] = $this->diskUsageRatio;
        }
        if (null !== $this->node) {
            $res['Node'] = $this->node;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiskUsageRatio'])) {
            $model->diskUsageRatio = $map['DiskUsageRatio'];
        }
        if (isset($map['Node'])) {
            $model->node = $map['Node'];
        }

        return $model;
    }
}
