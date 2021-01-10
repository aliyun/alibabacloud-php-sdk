<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo;

use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult;
use AlibabaCloud\Tea\Model;

class hitResult extends Model
{
    /**
     * @var hitResult[]
     */
    public $hitResult;
    protected $_name = [
        'hitResult' => 'HitResult',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hitResult) {
            $res['HitResult'] = [];
            if (null !== $this->hitResult && \is_array($this->hitResult)) {
                $n = 0;
                foreach ($this->hitResult as $item) {
                    $res['HitResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hitResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HitResult'])) {
            if (!empty($map['HitResult'])) {
                $model->hitResult = [];
                $n                = 0;
                foreach ($map['HitResult'] as $item) {
                    $model->hitResult[$n++] = null !== $item ? self::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
