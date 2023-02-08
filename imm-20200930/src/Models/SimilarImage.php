<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class SimilarImage extends Model
{
    /**
     * @var float
     */
    public $imageScore;

    /**
     * @var string
     */
    public $URI;
    protected $_name = [
        'imageScore' => 'ImageScore',
        'URI'        => 'URI',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageScore) {
            $res['ImageScore'] = $this->imageScore;
        }
        if (null !== $this->URI) {
            $res['URI'] = $this->URI;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SimilarImage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageScore'])) {
            $model->imageScore = $map['ImageScore'];
        }
        if (isset($map['URI'])) {
            $model->URI = $map['URI'];
        }

        return $model;
    }
}
