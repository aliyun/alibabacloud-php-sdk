<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\BatchForbidVsStreamResponseBody;

use AlibabaCloud\SDK\Vs\V20181212\Models\BatchForbidVsStreamResponseBody\forbidResult\forbidResultInfo;
use AlibabaCloud\Tea\Model;

class forbidResult extends Model
{
    /**
     * @var forbidResultInfo[]
     */
    public $forbidResultInfo;
    protected $_name = [
        'forbidResultInfo' => 'ForbidResultInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->forbidResultInfo) {
            $res['ForbidResultInfo'] = [];
            if (null !== $this->forbidResultInfo && \is_array($this->forbidResultInfo)) {
                $n = 0;
                foreach ($this->forbidResultInfo as $item) {
                    $res['ForbidResultInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return forbidResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ForbidResultInfo'])) {
            if (!empty($map['ForbidResultInfo'])) {
                $model->forbidResultInfo = [];
                $n                       = 0;
                foreach ($map['ForbidResultInfo'] as $item) {
                    $model->forbidResultInfo[$n++] = null !== $item ? forbidResultInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
