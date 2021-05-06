<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models\DescribeProcessListResponseBody;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeProcessListResponseBody\items\process;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var process[]
     */
    public $process;
    protected $_name = [
        'process' => 'Process',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->process) {
            $res['Process'] = [];
            if (null !== $this->process && \is_array($this->process)) {
                $n = 0;
                foreach ($this->process as $item) {
                    $res['Process'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['Process'])) {
            if (!empty($map['Process'])) {
                $model->process = [];
                $n              = 0;
                foreach ($map['Process'] as $item) {
                    $model->process[$n++] = null !== $item ? process::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
