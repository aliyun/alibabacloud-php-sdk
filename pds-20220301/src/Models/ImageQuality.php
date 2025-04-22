<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class ImageQuality extends Model
{
    /**
     * @var float
     */
    public $overallScore;
    protected $_name = [
        'overallScore' => 'overall_score',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->overallScore) {
            $res['overall_score'] = $this->overallScore;
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
        if (isset($map['overall_score'])) {
            $model->overallScore = $map['overall_score'];
        }

        return $model;
    }
}
