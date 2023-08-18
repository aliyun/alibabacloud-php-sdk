<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Facebody\V20191230\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class CompareFaceWithMaskAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $imageURLAObject;

    /**
     * @var Stream
     */
    public $imageURLBObject;

    /**
     * @example 97.0
     *
     * @var float
     */
    public $qualityScoreThreshold;
    protected $_name = [
        'imageURLAObject'       => 'ImageURLA',
        'imageURLBObject'       => 'ImageURLB',
        'qualityScoreThreshold' => 'QualityScoreThreshold',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->imageURLAObject) {
            $res['ImageURLA'] = $this->imageURLAObject;
        }
        if (null !== $this->imageURLBObject) {
            $res['ImageURLB'] = $this->imageURLBObject;
        }
        if (null !== $this->qualityScoreThreshold) {
            $res['QualityScoreThreshold'] = $this->qualityScoreThreshold;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CompareFaceWithMaskAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ImageURLA'])) {
            $model->imageURLAObject = $map['ImageURLA'];
        }
        if (isset($map['ImageURLB'])) {
            $model->imageURLBObject = $map['ImageURLB'];
        }
        if (isset($map['QualityScoreThreshold'])) {
            $model->qualityScoreThreshold = $map['QualityScoreThreshold'];
        }

        return $model;
    }
}
