<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;

class CountCrowdAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $imageURLObject;

    /**
     * @var bool
     */
    public $isShow;
    protected $_name = [
        'imageURLObject' => 'ImageURLObject',
        'isShow'         => 'IsShow',
    ];

    public function validate()
    {
        Model::validateRequired('imageURLObject', $this->imageURLObject, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageURLObject) {
            $res['ImageURLObject'] = $this->imageURLObject;
        }
        if (null !== $this->isShow) {
            $res['IsShow'] = $this->isShow;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CountCrowdAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURLObject'])) {
            $model->imageURLObject = $map['ImageURLObject'];
        }
        if (isset($map['IsShow'])) {
            $model->isShow = $map['IsShow'];
        }

        return $model;
    }
}
