<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Tea\Model;

class ImageQuality extends Model
{
    /**
     * @example 0.736
     *
     * @var float
     */
    public $overallScore;
    protected $_name = [
        'overallScore' => 'overall_score',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->overallScore) {
            $res['overall_score'] = $this->overallScore;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImageQuality
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['overall_score'])) {
            $model->overallScore = $map['overall_score'];
        }

        return $model;
    }
}
