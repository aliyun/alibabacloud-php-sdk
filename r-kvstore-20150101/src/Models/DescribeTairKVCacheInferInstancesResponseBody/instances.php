<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeTairKVCacheInferInstancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeTairKVCacheInferInstancesResponseBody\instances\tairInferInstanceDTO;

class instances extends Model
{
    /**
     * @var tairInferInstanceDTO[]
     */
    public $tairInferInstanceDTO;
    protected $_name = [
        'tairInferInstanceDTO' => 'TairInferInstanceDTO',
    ];

    public function validate()
    {
        if (\is_array($this->tairInferInstanceDTO)) {
            Model::validateArray($this->tairInferInstanceDTO);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tairInferInstanceDTO) {
            if (\is_array($this->tairInferInstanceDTO)) {
                $res['TairInferInstanceDTO'] = [];
                $n1 = 0;
                foreach ($this->tairInferInstanceDTO as $item1) {
                    $res['TairInferInstanceDTO'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['TairInferInstanceDTO'])) {
            if (!empty($map['TairInferInstanceDTO'])) {
                $model->tairInferInstanceDTO = [];
                $n1 = 0;
                foreach ($map['TairInferInstanceDTO'] as $item1) {
                    $model->tairInferInstanceDTO[$n1] = tairInferInstanceDTO::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
