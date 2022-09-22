<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeImageFamiliesResponseBody;

use AlibabaCloud\Tea\Model;

class imageFamilies extends Model
{
    /**
     * @var string[]
     */
    public $imageFamily;
    protected $_name = [
        'imageFamily' => 'ImageFamily',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageFamily) {
            $res['ImageFamily'] = $this->imageFamily;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageFamilies
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageFamily'])) {
            if (!empty($map['ImageFamily'])) {
                $model->imageFamily = $map['ImageFamily'];
            }
        }

        return $model;
    }
}
