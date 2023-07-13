<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListOTATaskByJobResponseBody;

use AlibabaCloud\SDK\Iot\V20180120\Models\ListOTATaskByJobResponseBody\data\simpleOTATaskInfo;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var simpleOTATaskInfo[]
     */
    public $simpleOTATaskInfo;
    protected $_name = [
        'simpleOTATaskInfo' => 'SimpleOTATaskInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->simpleOTATaskInfo) {
            $res['SimpleOTATaskInfo'] = [];
            if (null !== $this->simpleOTATaskInfo && \is_array($this->simpleOTATaskInfo)) {
                $n = 0;
                foreach ($this->simpleOTATaskInfo as $item) {
                    $res['SimpleOTATaskInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SimpleOTATaskInfo'])) {
            if (!empty($map['SimpleOTATaskInfo'])) {
                $model->simpleOTATaskInfo = [];
                $n                        = 0;
                foreach ($map['SimpleOTATaskInfo'] as $item) {
                    $model->simpleOTATaskInfo[$n++] = null !== $item ? simpleOTATaskInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
