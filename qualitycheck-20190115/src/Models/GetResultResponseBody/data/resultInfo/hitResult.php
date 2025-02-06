<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Qualitycheck\V20190115\Models\GetResultResponseBody\data\resultInfo\hitResult\hitResult;

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
        if (\is_array($this->hitResult)) {
            Model::validateArray($this->hitResult);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hitResult) {
            if (\is_array($this->hitResult)) {
                $res['HitResult'] = [];
                $n1               = 0;
                foreach ($this->hitResult as $item1) {
                    $res['HitResult'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['HitResult'])) {
            if (!empty($map['HitResult'])) {
                $model->hitResult = [];
                $n1               = 0;
                foreach ($map['HitResult'] as $item1) {
                    $model->hitResult[$n1++] = self::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
