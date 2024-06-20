<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\CreateWmBaseImageResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example fafb432cdede9b20640e12105845386e-496883833-8242409229217337*****
     *
     * @var string
     */
    public $imageId;

    /**
     * @example https://example.com/test-*****.png
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @example 17185*****
     *
     * @var int
     */
    public $imageUrlExp;
    protected $_name = [
        'imageId'     => 'ImageId',
        'imageUrl'    => 'ImageUrl',
        'imageUrlExp' => 'ImageUrlExp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->imageUrlExp) {
            $res['ImageUrlExp'] = $this->imageUrlExp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['ImageUrlExp'])) {
            $model->imageUrlExp = $map['ImageUrlExp'];
        }

        return $model;
    }
}
