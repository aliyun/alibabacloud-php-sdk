<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imagerecog\V20190930\Models\EvaluateCertificateQualityResponseBody\data;

use AlibabaCloud\Dara\Model;

class elements extends Model
{
    /**
     * @var string
     */
    public $pass;

    /**
     * @var string
     */
    public $score;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'pass' => 'Pass',
        'score' => 'Score',
        'value' => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
