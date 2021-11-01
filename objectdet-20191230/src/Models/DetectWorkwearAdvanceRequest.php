<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models;

use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectWorkwearAdvanceRequest\clothes;
use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class DetectWorkwearAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $imageUrlObject;

    /**
     * @var clothes
     */
    public $clothes;

    /**
     * @var string[]
     */
    public $labels;
    protected $_name = [
        'imageUrlObject' => 'ImageUrlObject',
        'clothes'        => 'Clothes',
        'labels'         => 'Labels',
    ];

    public function validate()
    {
        Model::validateRequired('imageUrlObject', $this->imageUrlObject, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageUrlObject) {
            $res['ImageUrlObject'] = $this->imageUrlObject;
        }
        if (null !== $this->clothes) {
            $res['Clothes'] = null !== $this->clothes ? $this->clothes->toMap() : null;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DetectWorkwearAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageUrlObject'])) {
            $model->imageUrlObject = $map['ImageUrlObject'];
        }
        if (isset($map['Clothes'])) {
            $model->clothes = clothes::fromMap($map['Clothes']);
        }
        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = $map['Labels'];
            }
        }

        return $model;
    }
}
