<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyResultResponseBody\material;
use AlibabaCloud\Tea\Model;

class DescribeVerifyResultResponseBody extends Model
{
    /**
     * @var int
     */
    public $verifyStatus;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var material
     */
    public $material;

    /**
     * @var float
     */
    public $authorityComparisionScore;

    /**
     * @var float
     */
    public $faceComparisonScore;

    /**
     * @var float
     */
    public $idCardFaceComparisonScore;
    protected $_name = [
        'verifyStatus'              => 'VerifyStatus',
        'requestId'                 => 'RequestId',
        'material'                  => 'Material',
        'authorityComparisionScore' => 'AuthorityComparisionScore',
        'faceComparisonScore'       => 'FaceComparisonScore',
        'idCardFaceComparisonScore' => 'IdCardFaceComparisonScore',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->verifyStatus) {
            $res['VerifyStatus'] = $this->verifyStatus;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->material) {
            $res['Material'] = null !== $this->material ? $this->material->toMap() : null;
        }
        if (null !== $this->authorityComparisionScore) {
            $res['AuthorityComparisionScore'] = $this->authorityComparisionScore;
        }
        if (null !== $this->faceComparisonScore) {
            $res['FaceComparisonScore'] = $this->faceComparisonScore;
        }
        if (null !== $this->idCardFaceComparisonScore) {
            $res['IdCardFaceComparisonScore'] = $this->idCardFaceComparisonScore;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVerifyResultResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VerifyStatus'])) {
            $model->verifyStatus = $map['VerifyStatus'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Material'])) {
            $model->material = material::fromMap($map['Material']);
        }
        if (isset($map['AuthorityComparisionScore'])) {
            $model->authorityComparisionScore = $map['AuthorityComparisionScore'];
        }
        if (isset($map['FaceComparisonScore'])) {
            $model->faceComparisonScore = $map['FaceComparisonScore'];
        }
        if (isset($map['IdCardFaceComparisonScore'])) {
            $model->idCardFaceComparisonScore = $map['IdCardFaceComparisonScore'];
        }

        return $model;
    }
}
