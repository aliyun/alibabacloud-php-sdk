<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetEditingProjectMaterialsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetEditingProjectMaterialsResponseBody\materialList\material;

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
        if (\is_array($this->material)) {
            Model::validateArray($this->material);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->material) {
            if (\is_array($this->material)) {
                $res['Material'] = [];
                $n1 = 0;
                foreach ($this->material as $item1) {
                    $res['Material'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['Material'])) {
            if (!empty($map['Material'])) {
                $model->material = [];
                $n1 = 0;
                foreach ($map['Material'] as $item1) {
                    $model->material[$n1] = material::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
