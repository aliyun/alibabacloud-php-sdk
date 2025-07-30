<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeTairKVCacheInferInstancesResponseBody;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeTairKVCacheInferInstancesResponseBody\instances\tairInferInstanceDTO;
use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @var tairInferInstanceDTO[]
     */
    public $tairInferInstanceDTO;
    protected $_name = [
        'tairInferInstanceDTO' => 'TairInferInstanceDTO',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->tairInferInstanceDTO) {
            $res['TairInferInstanceDTO'] = [];
            if (null !== $this->tairInferInstanceDTO && \is_array($this->tairInferInstanceDTO)) {
                $n = 0;
                foreach ($this->tairInferInstanceDTO as $item) {
                    $res['TairInferInstanceDTO'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TairInferInstanceDTO'])) {
            if (!empty($map['TairInferInstanceDTO'])) {
                $model->tairInferInstanceDTO = [];
                $n = 0;
                foreach ($map['TairInferInstanceDTO'] as $item) {
                    $model->tairInferInstanceDTO[$n++] = null !== $item ? tairInferInstanceDTO::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
