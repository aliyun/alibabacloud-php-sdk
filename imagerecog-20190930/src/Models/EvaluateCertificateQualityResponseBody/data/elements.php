<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imagerecog\V20190930\Models\EvaluateCertificateQualityResponseBody\data;

use AlibabaCloud\Tea\Model;

class elements extends Model
{
    /**
     * @example false
     *
     * @var string
     */
    public $pass;

    /**
     * @example 0.06514739990234375
     *
     * @var string
     */
    public $score;

    /**
     * @example lackoffront
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'pass'  => 'Pass',
        'score' => 'Score',
        'value' => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pass) {
            $res['Pass'] = $this->pass;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return elements
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Pass'])) {
            $model->pass = $map['Pass'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
