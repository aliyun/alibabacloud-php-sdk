<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;

class DeleteRenderingInstanceSettingsRequest extends Model
{
    /**
     * @var string[]
     */
    public $attributeNames;

    /**
     * @var string
     */
    public $renderingInstanceId;
    protected $_name = [
        'attributeNames' => 'AttributeNames',
        'renderingInstanceId' => 'RenderingInstanceId',
    ];

    public function validate()
    {
        if (\is_array($this->attributeNames)) {
            Model::validateArray($this->attributeNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributeNames) {
            if (\is_array($this->attributeNames)) {
                $res['AttributeNames'] = [];
                $n1 = 0;
                foreach ($this->attributeNames as $item1) {
                    $res['AttributeNames'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['AttributeNames'])) {
                $model->attributeNames = [];
                $n1 = 0;
                foreach ($map['AttributeNames'] as $item1) {
                    $model->attributeNames[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RenderingInstanceId'])) {
            $model->renderingInstanceId = $map['RenderingInstanceId'];
        }

        return $model;
    }
}
