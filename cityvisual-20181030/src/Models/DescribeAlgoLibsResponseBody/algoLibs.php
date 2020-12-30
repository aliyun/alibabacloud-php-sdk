<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cityvisual\V20181030\Models\DescribeAlgoLibsResponseBody;

use AlibabaCloud\SDK\Cityvisual\V20181030\Models\DescribeAlgoLibsResponseBody\algoLibs\algoLib;
use AlibabaCloud\Tea\Model;

class algoLibs extends Model
{
    /**
     * @var algoLib[]
     */
    public $algoLib;
    protected $_name = [
        'algoLib' => 'AlgoLib',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->algoLib) {
            $res['AlgoLib'] = [];
            if (null !== $this->algoLib && \is_array($this->algoLib)) {
                $n = 0;
                foreach ($this->algoLib as $item) {
                    $res['AlgoLib'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return algoLibs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlgoLib'])) {
            if (!empty($map['AlgoLib'])) {
                $model->algoLib = [];
                $n              = 0;
                foreach ($map['AlgoLib'] as $item) {
                    $model->algoLib[$n++] = null !== $item ? algoLib::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
