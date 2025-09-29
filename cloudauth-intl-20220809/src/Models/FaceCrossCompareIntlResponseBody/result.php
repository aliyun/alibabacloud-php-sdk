<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\FaceCrossCompareIntlResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var float
     */
    public $faceComparisonScoreA2B;

    /**
     * @var float
     */
    public $faceComparisonScoreB2C;

    /**
     * @var float
     */
    public $faceComparisonScoreC2A;

    /**
     * @var string
     */
    public $facePassed;

    /**
     * @var string
     */
    public $transactionId;
    protected $_name = [
        'faceComparisonScoreA2B' => 'FaceComparisonScoreA2B',
        'faceComparisonScoreB2C' => 'FaceComparisonScoreB2C',
        'faceComparisonScoreC2A' => 'FaceComparisonScoreC2A',
        'facePassed' => 'FacePassed',
        'transactionId' => 'TransactionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->faceComparisonScoreA2B) {
            $res['FaceComparisonScoreA2B'] = $this->faceComparisonScoreA2B;
        }

        if (null !== $this->faceComparisonScoreB2C) {
            $res['FaceComparisonScoreB2C'] = $this->faceComparisonScoreB2C;
        }

        if (null !== $this->faceComparisonScoreC2A) {
            $res['FaceComparisonScoreC2A'] = $this->faceComparisonScoreC2A;
        }

        if (null !== $this->facePassed) {
            $res['FacePassed'] = $this->facePassed;
        }

        if (null !== $this->transactionId) {
            $res['TransactionId'] = $this->transactionId;
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
        if (isset($map['FaceComparisonScoreA2B'])) {
            $model->faceComparisonScoreA2B = $map['FaceComparisonScoreA2B'];
        }

        if (isset($map['FaceComparisonScoreB2C'])) {
            $model->faceComparisonScoreB2C = $map['FaceComparisonScoreB2C'];
        }

        if (isset($map['FaceComparisonScoreC2A'])) {
            $model->faceComparisonScoreC2A = $map['FaceComparisonScoreC2A'];
        }

        if (isset($map['FacePassed'])) {
            $model->facePassed = $map['FacePassed'];
        }

        if (isset($map['TransactionId'])) {
            $model->transactionId = $map['TransactionId'];
        }

        return $model;
    }
}
