<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20210226\Models;

use AlibabaCloud\Tea\Model;

class StopInstanceV2Request extends Model
{
    /**
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
     * @return StopInstanceV2Request
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
