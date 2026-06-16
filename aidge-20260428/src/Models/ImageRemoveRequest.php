<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models;

use AlibabaCloud\Dara\Model;

class ImageRemoveRequest extends Model
{
    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var string
     */
    public $mask;

    /**
     * @var int[]
     */
    public $nonObjectRemoveElements;

    /**
     * @var int[]
     */
    public $objectRemoveElements;
    protected $_name = [
        'imageUrl' => 'ImageUrl',
        'mask' => 'Mask',
        'nonObjectRemoveElements' => 'NonObjectRemoveElements',
        'objectRemoveElements' => 'ObjectRemoveElements',
    ];

    public function validate()
    {
        if (\is_array($this->nonObjectRemoveElements)) {
            Model::validateArray($this->nonObjectRemoveElements);
        }
        if (\is_array($this->objectRemoveElements)) {
            Model::validateArray($this->objectRemoveElements);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }

        if (null !== $this->mask) {
            $res['Mask'] = $this->mask;
        }

        if (null !== $this->nonObjectRemoveElements) {
            if (\is_array($this->nonObjectRemoveElements)) {
                $res['NonObjectRemoveElements'] = [];
                $n1 = 0;
                foreach ($this->nonObjectRemoveElements as $item1) {
                    $res['NonObjectRemoveElements'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->objectRemoveElements) {
            if (\is_array($this->objectRemoveElements)) {
                $res['ObjectRemoveElements'] = [];
                $n1 = 0;
                foreach ($this->objectRemoveElements as $item1) {
                    $res['ObjectRemoveElements'][$n1] = $item1;
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
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }

        if (isset($map['Mask'])) {
            $model->mask = $map['Mask'];
        }

        if (isset($map['NonObjectRemoveElements'])) {
            if (!empty($map['NonObjectRemoveElements'])) {
                $model->nonObjectRemoveElements = [];
                $n1 = 0;
                foreach ($map['NonObjectRemoveElements'] as $item1) {
                    $model->nonObjectRemoveElements[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ObjectRemoveElements'])) {
            if (!empty($map['ObjectRemoveElements'])) {
                $model->objectRemoveElements = [];
                $n1 = 0;
                foreach ($map['ObjectRemoveElements'] as $item1) {
                    $model->objectRemoveElements[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
