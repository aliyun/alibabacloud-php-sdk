<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ivpd\V20190625\Models\ListPackageDesignModelTypesResponseBody\data;

use AlibabaCloud\SDK\Ivpd\V20190625\Models\ListPackageDesignModelTypesResponseBody\data\modelTypeList\elements;
use AlibabaCloud\Tea\Model;

class modelTypeList extends Model
{
    /**
     * @var elements[]
     */
    public $elements;

    /**
     * @var string
     */
    public $modelType;
    protected $_name = [
        'elements'  => 'Elements',
        'modelType' => 'ModelType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->elements) {
            $res['Elements'] = [];
            if (null !== $this->elements && \is_array($this->elements)) {
                $n = 0;
                foreach ($this->elements as $item) {
                    $res['Elements'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->modelType) {
            $res['ModelType'] = $this->modelType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return modelTypeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Elements'])) {
            if (!empty($map['Elements'])) {
                $model->elements = [];
                $n               = 0;
                foreach ($map['Elements'] as $item) {
                    $model->elements[$n++] = null !== $item ? elements::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ModelType'])) {
            $model->modelType = $map['ModelType'];
        }

        return $model;
    }
}
