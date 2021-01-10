<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryJobResponseBody\data\targetConfig;

use AlibabaCloud\SDK\Iot\V20180120\Models\QueryJobResponseBody\data\targetConfig\targetDevices\targetDevices;
use AlibabaCloud\Tea\Model;

class targetDevices extends Model
{
    /**
     * @var targetDevices[]
     */
    public $targetDevices;
    protected $_name = [
        'targetDevices' => 'targetDevices',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->targetDevices) {
            $res['targetDevices'] = [];
            if (null !== $this->targetDevices && \is_array($this->targetDevices)) {
                $n = 0;
                foreach ($this->targetDevices as $item) {
                    $res['targetDevices'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return targetDevices
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['targetDevices'])) {
            if (!empty($map['targetDevices'])) {
                $model->targetDevices = [];
                $n                    = 0;
                foreach ($map['targetDevices'] as $item) {
                    $model->targetDevices[$n++] = null !== $item ? self::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
