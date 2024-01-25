<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adp\V20210720\Models;

use AlibabaCloud\SDK\Adp\V20210720\Models\BatchAddProductVersionConfigRequest\productVersionConfigList;
use AlibabaCloud\Tea\Model;

class BatchAddProductVersionConfigRequest extends Model
{
    /**
     * @var productVersionConfigList[]
     */
    public $productVersionConfigList;
    protected $_name = [
        'productVersionConfigList' => 'productVersionConfigList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productVersionConfigList) {
            $res['productVersionConfigList'] = [];
            if (null !== $this->productVersionConfigList && \is_array($this->productVersionConfigList)) {
                $n = 0;
                foreach ($this->productVersionConfigList as $item) {
                    $res['productVersionConfigList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchAddProductVersionConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['productVersionConfigList'])) {
            if (!empty($map['productVersionConfigList'])) {
                $model->productVersionConfigList = [];
                $n                               = 0;
                foreach ($map['productVersionConfigList'] as $item) {
                    $model->productVersionConfigList[$n++] = null !== $item ? productVersionConfigList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
