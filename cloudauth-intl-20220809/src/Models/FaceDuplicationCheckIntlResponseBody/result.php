<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthintl\V20220809\Models\FaceDuplicationCheckIntlResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $duplicateFace;

    /**
     * @var string
     */
    public $faceAge;

    /**
     * @var string
     */
    public $faceAttack;

    /**
     * @var string
     */
    public $faceAttackScore;

    /**
     * @var string
     */
    public $faceComparisonScore;

    /**
     * @var string
     */
    public $faceGender;

    /**
     * @var string
     */
    public $facePassed;

    /**
     * @var string
     */
    public $faceRegistrationId;

    /**
     * @var int
     */
    public $faceRegistrationResult;

    /**
     * @var string
     */
    public $subCode;

    /**
     * @var string
     */
    public $transactionId;
    protected $_name = [
        'duplicateFace' => 'DuplicateFace',
        'faceAge' => 'FaceAge',
        'faceAttack' => 'FaceAttack',
        'faceAttackScore' => 'FaceAttackScore',
        'faceComparisonScore' => 'FaceComparisonScore',
        'faceGender' => 'FaceGender',
        'facePassed' => 'FacePassed',
        'faceRegistrationId' => 'FaceRegistrationId',
        'faceRegistrationResult' => 'FaceRegistrationResult',
        'subCode' => 'SubCode',
        'transactionId' => 'TransactionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->duplicateFace) {
            $res['DuplicateFace'] = $this->duplicateFace;
        }

        if (null !== $this->faceAge) {
            $res['FaceAge'] = $this->faceAge;
        }

        if (null !== $this->faceAttack) {
            $res['FaceAttack'] = $this->faceAttack;
        }

        if (null !== $this->faceAttackScore) {
            $res['FaceAttackScore'] = $this->faceAttackScore;
        }

        if (null !== $this->faceComparisonScore) {
            $res['FaceComparisonScore'] = $this->faceComparisonScore;
        }

        if (null !== $this->faceGender) {
            $res['FaceGender'] = $this->faceGender;
        }

        if (null !== $this->facePassed) {
            $res['FacePassed'] = $this->facePassed;
        }

        if (null !== $this->faceRegistrationId) {
            $res['FaceRegistrationId'] = $this->faceRegistrationId;
        }

        if (null !== $this->faceRegistrationResult) {
            $res['FaceRegistrationResult'] = $this->faceRegistrationResult;
        }

        if (null !== $this->subCode) {
            $res['SubCode'] = $this->subCode;
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
        if (isset($map['DuplicateFace'])) {
            $model->duplicateFace = $map['DuplicateFace'];
        }

        if (isset($map['FaceAge'])) {
            $model->faceAge = $map['FaceAge'];
        }

        if (isset($map['FaceAttack'])) {
            $model->faceAttack = $map['FaceAttack'];
        }

        if (isset($map['FaceAttackScore'])) {
            $model->faceAttackScore = $map['FaceAttackScore'];
        }

        if (isset($map['FaceComparisonScore'])) {
            $model->faceComparisonScore = $map['FaceComparisonScore'];
        }

        if (isset($map['FaceGender'])) {
            $model->faceGender = $map['FaceGender'];
        }

        if (isset($map['FacePassed'])) {
            $model->facePassed = $map['FacePassed'];
        }

        if (isset($map['FaceRegistrationId'])) {
            $model->faceRegistrationId = $map['FaceRegistrationId'];
        }

        if (isset($map['FaceRegistrationResult'])) {
            $model->faceRegistrationResult = $map['FaceRegistrationResult'];
        }

        if (isset($map['SubCode'])) {
            $model->subCode = $map['SubCode'];
        }

        if (isset($map['TransactionId'])) {
            $model->transactionId = $map['TransactionId'];
        }

        return $model;
    }
}
