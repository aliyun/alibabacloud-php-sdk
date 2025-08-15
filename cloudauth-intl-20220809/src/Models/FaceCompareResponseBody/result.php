<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\FaceCompareResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var float
     */
    public $faceComparisonScore;

    /**
     * @var string
     */
    public $passed;

    /**
     * @var string
     */
    public $transactionId;
    protected $_name = [
        'faceComparisonScore' => 'FaceComparisonScore',
        'passed' => 'Passed',
        'transactionId' => 'TransactionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->faceComparisonScore) {
            $res['FaceComparisonScore'] = $this->faceComparisonScore;
        }

        if (null !== $this->passed) {
            $res['Passed'] = $this->passed;
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
        if (isset($map['FaceComparisonScore'])) {
            $model->faceComparisonScore = $map['FaceComparisonScore'];
        }

        if (isset($map['Passed'])) {
            $model->passed = $map['Passed'];
        }

        if (isset($map['TransactionId'])) {
            $model->transactionId = $map['TransactionId'];
        }

        return $model;
    }
}
