<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeCasterComponentsResponseBody\components\component;

use AlibabaCloud\Tea\Model;

class imageLayerContent extends Model
{
    /**
     * @description The ID of the material from the media library.
     *
     * @example 6cf724c6ebfd4a59b5b3cec6f10d****
     *
     * @var string
     */
    public $materialId;
    protected $_name = [
        'materialId' => 'MaterialId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->materialId) {
            $res['MaterialId'] = $this->materialId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageLayerContent
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaterialId'])) {
            $model->materialId = $map['MaterialId'];
        }

        return $model;
    }
}
