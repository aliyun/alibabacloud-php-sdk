<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\QuerySignByParamResponseBody;

use AlibabaCloud\SDK\Dm\V20151123\Models\QuerySignByParamResponseBody\data\sign;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var sign[]
     */
    public $sign;
    protected $_name = [
        'sign' => 'sign',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sign) {
            $res['sign'] = [];
            if (null !== $this->sign && \is_array($this->sign)) {
                $n = 0;
                foreach ($this->sign as $item) {
                    $res['sign'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['sign'])) {
            if (!empty($map['sign'])) {
                $model->sign = [];
                $n           = 0;
                foreach ($map['sign'] as $item) {
                    $model->sign[$n++] = null !== $item ? sign::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
