<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\Tea\Model;

class StopInstanceRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $saveImage;
    protected $_name = [
        'saveImage' => 'SaveImage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->saveImage) {
            $res['SaveImage'] = $this->saveImage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopInstanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SaveImage'])) {
            $model->saveImage = $map['SaveImage'];
        }

        return $model;
    }
}
