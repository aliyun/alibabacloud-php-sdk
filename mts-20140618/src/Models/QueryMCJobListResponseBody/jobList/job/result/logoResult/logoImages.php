<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\logoResult;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryMCJobListResponseBody\jobList\job\result\logoResult\logoImages\logoImage;
use AlibabaCloud\Tea\Model;

class logoImages extends Model
{
    /**
     * @var logoImage[]
     */
    public $logoImage;
    protected $_name = [
        'logoImage' => 'LogoImage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logoImage) {
            $res['LogoImage'] = [];
            if (null !== $this->logoImage && \is_array($this->logoImage)) {
                $n = 0;
                foreach ($this->logoImage as $item) {
                    $res['LogoImage'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logoImages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogoImage'])) {
            if (!empty($map['LogoImage'])) {
                $model->logoImage = [];
                $n                = 0;
                foreach ($map['LogoImage'] as $item) {
                    $model->logoImage[$n++] = null !== $item ? logoImage::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
