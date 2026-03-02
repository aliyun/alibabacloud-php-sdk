<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class PdpImage extends Model
{
    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $imageTag;
    protected $_name = [
        'imageId' => 'imageId',
        'imageTag' => 'imageTag',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageId) {
            $res['imageId'] = $this->imageId;
        }

        if (null !== $this->imageTag) {
            $res['imageTag'] = $this->imageTag;
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
        if (isset($map['imageId'])) {
            $model->imageId = $map['imageId'];
        }

        if (isset($map['imageTag'])) {
            $model->imageTag = $map['imageTag'];
        }

        return $model;
    }
}
