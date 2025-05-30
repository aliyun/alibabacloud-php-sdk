<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class ImageScore extends Model
{
    /**
     * @var float
     */
    public $overallQualityScore;
    protected $_name = [
        'overallQualityScore' => 'OverallQualityScore',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->overallQualityScore) {
            $res['OverallQualityScore'] = $this->overallQualityScore;
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
        if (isset($map['OverallQualityScore'])) {
            $model->overallQualityScore = $map['OverallQualityScore'];
        }

        return $model;
    }
}
