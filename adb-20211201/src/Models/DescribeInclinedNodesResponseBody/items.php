<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeInclinedNodesResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $diskUsageRatio;

    /**
     * @var string
     */
    public $node;
    protected $_name = [
        'diskUsageRatio' => 'DiskUsageRatio',
        'node' => 'Node',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
