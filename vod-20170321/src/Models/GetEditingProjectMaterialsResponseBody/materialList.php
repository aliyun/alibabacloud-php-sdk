<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetEditingProjectMaterialsResponseBody;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetEditingProjectMaterialsResponseBody\materialList\material;
use AlibabaCloud\Tea\Model;

class materialList extends Model
{
    /**
     * @var material[]
     */
    public $material;
    protected $_name = [
        'material' => 'Material',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->material) {
            $res['Material'] = [];
            if (null !== $this->material && \is_array($this->material)) {
                $n = 0;
                foreach ($this->material as $item) {
                    $res['Material'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return materialList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Material'])) {
            if (!empty($map['Material'])) {
                $model->material = [];
                $n               = 0;
                foreach ($map['Material'] as $item) {
                    $model->material[$n++] = null !== $item ? material::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
