<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\subOrders\subOrder\moduleInstance\moduleInstance;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\subOrders\subOrder\moduleInstance\moduleInstance\moduleAttrs\moduleAttr;
use AlibabaCloud\Tea\Model;

class moduleAttrs extends Model
{
    /**
     * @var moduleAttr[]
     */
    public $moduleAttr;
    protected $_name = [
        'moduleAttr' => 'moduleAttr',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->moduleAttr) {
            $res['moduleAttr'] = [];
            if (null !== $this->moduleAttr && \is_array($this->moduleAttr)) {
                $n = 0;
                foreach ($this->moduleAttr as $item) {
                    $res['moduleAttr'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return moduleAttrs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['moduleAttr'])) {
            if (!empty($map['moduleAttr'])) {
                $model->moduleAttr = [];
                $n                 = 0;
                foreach ($map['moduleAttr'] as $item) {
                    $model->moduleAttr[$n++] = null !== $item ? moduleAttr::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
