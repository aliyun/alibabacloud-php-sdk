<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\UpdateImageInfosResponseBody;

use AlibabaCloud\Dara\Model;

class nonExistImageIds extends Model
{
    /**
     * @var string[]
     */
    public $imageId;
    protected $_name = [
        'imageId' => 'ImageId',
    ];

    public function validate()
    {
        if (\is_array($this->imageId)) {
            Model::validateArray($this->imageId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageId) {
            if (\is_array($this->imageId)) {
                $res['ImageId'] = [];
                $n1 = 0;
                foreach ($this->imageId as $item1) {
                    $res['ImageId'][$n1++] = $item1;
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
        if (isset($map['ImageId'])) {
            if (!empty($map['ImageId'])) {
                $model->imageId = [];
                $n1 = 0;
                foreach ($map['ImageId'] as $item1) {
                    $model->imageId[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
