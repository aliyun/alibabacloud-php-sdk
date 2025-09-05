<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Dara\Model;

class CompareFaceWithMaskRequest extends Model
{
    /**
     * @var string
     */
    public $imageURLA;

    /**
     * @var string
     */
    public $imageURLB;

    /**
     * @var float
     */
    public $qualityScoreThreshold;
    protected $_name = [
        'imageURLA' => 'ImageURLA',
        'imageURLB' => 'ImageURLB',
        'qualityScoreThreshold' => 'QualityScoreThreshold',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->imageURLA) {
            $res['ImageURLA'] = $this->imageURLA;
        }

        if (null !== $this->imageURLB) {
            $res['ImageURLB'] = $this->imageURLB;
        }

        if (null !== $this->qualityScoreThreshold) {
            $res['QualityScoreThreshold'] = $this->qualityScoreThreshold;
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
        if (isset($map['ImageURLA'])) {
            $model->imageURLA = $map['ImageURLA'];
        }

        if (isset($map['ImageURLB'])) {
            $model->imageURLB = $map['ImageURLB'];
        }

        if (isset($map['QualityScoreThreshold'])) {
            $model->qualityScoreThreshold = $map['QualityScoreThreshold'];
        }

        return $model;
    }
}
