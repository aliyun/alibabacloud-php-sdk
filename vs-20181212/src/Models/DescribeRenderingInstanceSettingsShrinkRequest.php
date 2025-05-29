<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;

class DescribeRenderingInstanceSettingsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $attributeNamesShrink;

    /**
     * @var string
     */
    public $renderingInstanceId;
    protected $_name = [
        'attributeNamesShrink' => 'AttributeNames',
        'renderingInstanceId' => 'RenderingInstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributeNamesShrink) {
            $res['AttributeNames'] = $this->attributeNamesShrink;
        }

        if (null !== $this->renderingInstanceId) {
            $res['RenderingInstanceId'] = $this->renderingInstanceId;
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
        if (isset($map['AttributeNames'])) {
            $model->attributeNamesShrink = $map['AttributeNames'];
        }

        if (isset($map['RenderingInstanceId'])) {
            $model->renderingInstanceId = $map['RenderingInstanceId'];
        }

        return $model;
    }
}
