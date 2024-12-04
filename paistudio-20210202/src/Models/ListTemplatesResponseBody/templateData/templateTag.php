<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models\ListTemplatesResponseBody\templateData;

use AlibabaCloud\Tea\Model;

class templateTag extends Model
{
    /**
     * @example PyTorch
     *
     * @var string
     */
    public $name;

    /**
     * @example template-tag-rbvg5wzljzjhc9ks92
     *
     * @var string
     */
    public $tagId;

    /**
     * @example template-tag-type-rbvg5wzljzjhc9ks92
     *
     * @var string
     */
    public $typeId;
    protected $_name = [
        'name'   => 'Name',
        'tagId'  => 'TagId',
        'typeId' => 'TypeId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->tagId) {
            $res['TagId'] = $this->tagId;
        }
        if (null !== $this->typeId) {
            $res['TypeId'] = $this->typeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return templateTag
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TagId'])) {
            $model->tagId = $map['TagId'];
        }
        if (isset($map['TypeId'])) {
            $model->typeId = $map['TypeId'];
        }

        return $model;
    }
}
