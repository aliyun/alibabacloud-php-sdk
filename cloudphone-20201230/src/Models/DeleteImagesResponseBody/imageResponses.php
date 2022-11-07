<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudphone\V20201230\Models\DeleteImagesResponseBody;

use AlibabaCloud\SDK\Cloudphone\V20201230\Models\DeleteImagesResponseBody\imageResponses\imageResponse;
use AlibabaCloud\Tea\Model;

class imageResponses extends Model
{
    /**
     * @var imageResponse[]
     */
    public $imageResponse;
    protected $_name = [
        'imageResponse' => 'ImageResponse',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageResponse) {
            $res['ImageResponse'] = [];
            if (null !== $this->imageResponse && \is_array($this->imageResponse)) {
                $n = 0;
                foreach ($this->imageResponse as $item) {
                    $res['ImageResponse'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return imageResponses
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageResponse'])) {
            if (!empty($map['ImageResponse'])) {
                $model->imageResponse = [];
                $n                    = 0;
                foreach ($map['ImageResponse'] as $item) {
                    $model->imageResponse[$n++] = null !== $item ? imageResponse::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
