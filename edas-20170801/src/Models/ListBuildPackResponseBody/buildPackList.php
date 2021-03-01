<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListBuildPackResponseBody;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListBuildPackResponseBody\buildPackList\buildPack;
use AlibabaCloud\Tea\Model;

class buildPackList extends Model
{
    /**
     * @var buildPack[]
     */
    public $buildPack;
    protected $_name = [
        'buildPack' => 'BuildPack',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buildPack) {
            $res['BuildPack'] = [];
            if (null !== $this->buildPack && \is_array($this->buildPack)) {
                $n = 0;
                foreach ($this->buildPack as $item) {
                    $res['BuildPack'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return buildPackList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BuildPack'])) {
            if (!empty($map['BuildPack'])) {
                $model->buildPack = [];
                $n                = 0;
                foreach ($map['BuildPack'] as $item) {
                    $model->buildPack[$n++] = null !== $item ? buildPack::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
