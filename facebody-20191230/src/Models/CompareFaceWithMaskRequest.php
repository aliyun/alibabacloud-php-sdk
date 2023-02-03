<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;

class CompareFaceWithMaskRequest extends Model
{
    /**
     * @example https://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/CompareFaceWithMask/CompareFaceWithMask-right1.jpeg
     *
     * @var string
     */
    public $imageURLA;

    /**
     * @example https://viapi-test.oss-cn-shanghai.aliyuncs.com/viapi-3.0domepic/facebody/CompareFaceWithMask/CompareFaceWithMask-left1.jpeg
     *
     * @var string
     */
    public $imageURLB;

    /**
     * @example 97.0
     *
     * @var float
     */
    public $qualityScoreThreshold;
    protected $_name = [
        'imageURLA'             => 'ImageURLA',
        'imageURLB'             => 'ImageURLB',
        'qualityScoreThreshold' => 'QualityScoreThreshold',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CompareFaceWithMaskRequest
     */
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
