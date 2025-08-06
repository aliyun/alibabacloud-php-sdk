<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;

class DeleteImagesRequest extends Model
{
    /**
     * @var string[]
     */
    public $imageIds;
    protected $_name = [
        'imageIds' => 'ImageIds',
    ];

    public function validate()
    {
        if (\is_array($this->imageIds)) {
            Model::validateArray($this->imageIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageIds) {
            if (\is_array($this->imageIds)) {
                $res['ImageIds'] = [];
                $n1 = 0;
                foreach ($this->imageIds as $item1) {
                    $res['ImageIds'][$n1] = $item1;
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
        if (isset($map['ImageIds'])) {
            if (!empty($map['ImageIds'])) {
                $model->imageIds = [];
                $n1 = 0;
                foreach ($map['ImageIds'] as $item1) {
                    $model->imageIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
