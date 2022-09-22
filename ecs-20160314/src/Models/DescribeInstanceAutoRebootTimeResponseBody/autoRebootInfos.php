<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeInstanceAutoRebootTimeResponseBody;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeInstanceAutoRebootTimeResponseBody\autoRebootInfos\autoRebootInfo;
use AlibabaCloud\Tea\Model;

class autoRebootInfos extends Model
{
    /**
     * @var autoRebootInfo[]
     */
    public $autoRebootInfo;
    protected $_name = [
        'autoRebootInfo' => 'AutoRebootInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRebootInfo) {
            $res['AutoRebootInfo'] = [];
            if (null !== $this->autoRebootInfo && \is_array($this->autoRebootInfo)) {
                $n = 0;
                foreach ($this->autoRebootInfo as $item) {
                    $res['AutoRebootInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return autoRebootInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRebootInfo'])) {
            if (!empty($map['AutoRebootInfo'])) {
                $model->autoRebootInfo = [];
                $n                     = 0;
                foreach ($map['AutoRebootInfo'] as $item) {
                    $model->autoRebootInfo[$n++] = null !== $item ? autoRebootInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
