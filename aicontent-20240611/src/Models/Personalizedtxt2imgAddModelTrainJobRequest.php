<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiContent\V20240611\Models;

use AlibabaCloud\Tea\Model;

class Personalizedtxt2imgAddModelTrainJobRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $imageUrl;

    /**
     * @description This parameter is required.
     *
     * @example 熊猫图片生成
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @example dog
     *
     * @var string
     */
    public $objectType;

    /**
     * @example 800
     *
     * @var int
     */
    public $trainSteps;
    protected $_name = [
        'imageUrl'   => 'imageUrl',
        'name'       => 'name',
        'objectType' => 'objectType',
        'trainSteps' => 'trainSteps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageUrl) {
            $res['imageUrl'] = $this->imageUrl;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->objectType) {
            $res['objectType'] = $this->objectType;
        }
        if (null !== $this->trainSteps) {
            $res['trainSteps'] = $this->trainSteps;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Personalizedtxt2imgAddModelTrainJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['imageUrl'])) {
            if (!empty($map['imageUrl'])) {
                $model->imageUrl = $map['imageUrl'];
            }
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['objectType'])) {
            $model->objectType = $map['objectType'];
        }
        if (isset($map['trainSteps'])) {
            $model->trainSteps = $map['trainSteps'];
        }

        return $model;
    }
}
