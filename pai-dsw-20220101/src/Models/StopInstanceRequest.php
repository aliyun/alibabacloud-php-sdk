<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Paidsw\V20220101\Models;

use AlibabaCloud\Dara\Model;

class StopInstanceRequest extends Model
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
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->saveImage) {
            $res['SaveImage'] = $this->saveImage;
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
        if (isset($map['SaveImage'])) {
            $model->saveImage = $map['SaveImage'];
        }

        return $model;
    }
}
