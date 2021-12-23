<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\GetAutoScaleConfigResponseBody\queues\queueInfo;

use AlibabaCloud\SDK\EHPC\V20180412\Models\GetAutoScaleConfigResponseBody\queues\queueInfo\dataDisks\dataDisksInfo;
use AlibabaCloud\Tea\Model;

class dataDisks extends Model
{
    /**
     * @var dataDisksInfo[]
     */
    public $dataDisksInfo;
    protected $_name = [
        'dataDisksInfo' => 'DataDisksInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataDisksInfo) {
            $res['DataDisksInfo'] = [];
            if (null !== $this->dataDisksInfo && \is_array($this->dataDisksInfo)) {
                $n = 0;
                foreach ($this->dataDisksInfo as $item) {
                    $res['DataDisksInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataDisks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataDisksInfo'])) {
            if (!empty($map['DataDisksInfo'])) {
                $model->dataDisksInfo = [];
                $n                    = 0;
                foreach ($map['DataDisksInfo'] as $item) {
                    $model->dataDisksInfo[$n++] = null !== $item ? dataDisksInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
