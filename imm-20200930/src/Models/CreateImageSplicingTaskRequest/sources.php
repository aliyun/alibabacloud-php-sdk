<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\CreateImageSplicingTaskRequest;

use AlibabaCloud\Tea\Model;

class sources extends Model
{
    /**
     * @description The rotation angle. Valid values:
     *
     *   0 (default)
     *   90
     *   180
     *   270
     *
     * @example 90
     *
     * @var int
     */
    public $rotate;

    /**
     * @description The Object Storage Service (OSS) bucket in which you store the input images.
     *
     * This parameter is required.
     * @example oss://examplebucket/sampleobject.jpg
     *
     * @var string
     */
    public $URI;
    protected $_name = [
        'rotate' => 'Rotate',
        'URI'    => 'URI',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->rotate) {
            $res['Rotate'] = $this->rotate;
        }
        if (null !== $this->URI) {
            $res['URI'] = $this->URI;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Rotate'])) {
            $model->rotate = $map['Rotate'];
        }
        if (isset($map['URI'])) {
            $model->URI = $map['URI'];
        }

        return $model;
    }
}
