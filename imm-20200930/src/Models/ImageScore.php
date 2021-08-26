<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ImageScore extends Model
{
    /**
     * @description OverallQualityScore
     *
     * @var float
     */
    public $overallQualityScore;
    protected $_name = [
        'overallQualityScore' => 'OverallQualityScore',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->overallQualityScore) {
            $res['OverallQualityScore'] = $this->overallQualityScore;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImageScore
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OverallQualityScore'])) {
            $model->overallQualityScore = $map['OverallQualityScore'];
        }

        return $model;
    }
}
