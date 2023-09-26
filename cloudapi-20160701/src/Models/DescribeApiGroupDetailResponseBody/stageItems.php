<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160701\Models\DescribeApiGroupDetailResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20160701\Models\DescribeApiGroupDetailResponseBody\stageItems\stageInfo;
use AlibabaCloud\Tea\Model;

class stageItems extends Model
{
    /**
     * @var stageInfo[]
     */
    public $stageInfo;
    protected $_name = [
        'stageInfo' => 'StageInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stageInfo) {
            $res['StageInfo'] = [];
            if (null !== $this->stageInfo && \is_array($this->stageInfo)) {
                $n = 0;
                foreach ($this->stageInfo as $item) {
                    $res['StageInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stageItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StageInfo'])) {
            if (!empty($map['StageInfo'])) {
                $model->stageInfo = [];
                $n                = 0;
                foreach ($map['StageInfo'] as $item) {
                    $model->stageInfo[$n++] = null !== $item ? stageInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
