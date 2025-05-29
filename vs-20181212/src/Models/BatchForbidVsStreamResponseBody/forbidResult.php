<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\BatchForbidVsStreamResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vs\V20181212\Models\BatchForbidVsStreamResponseBody\forbidResult\forbidResultInfo;

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
        if (\is_array($this->forbidResultInfo)) {
            Model::validateArray($this->forbidResultInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->forbidResultInfo) {
            if (\is_array($this->forbidResultInfo)) {
                $res['ForbidResultInfo'] = [];
                $n1 = 0;
                foreach ($this->forbidResultInfo as $item1) {
                    $res['ForbidResultInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['ForbidResultInfo'])) {
            if (!empty($map['ForbidResultInfo'])) {
                $model->forbidResultInfo = [];
                $n1 = 0;
                foreach ($map['ForbidResultInfo'] as $item1) {
                    $model->forbidResultInfo[$n1++] = forbidResultInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
