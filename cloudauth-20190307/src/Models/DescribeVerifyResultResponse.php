<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyResultResponse\material;
use AlibabaCloud\Tea\Model;

class DescribeVerifyResultResponse extends Model
{
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

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $verifyStatus;

    /**
     * @var material
     */
    public $material;
    protected $_name = [
        'authorityComparisionScore' => 'AuthorityComparisionScore',
        'faceComparisonScore'       => 'FaceComparisonScore',
        'idCardFaceComparisonScore' => 'IdCardFaceComparisonScore',
        'requestId'                 => 'RequestId',
        'verifyStatus'              => 'VerifyStatus',
        'material'                  => 'Material',
    ];

    public function validate()
    {
        Model::validateRequired('authorityComparisionScore', $this->authorityComparisionScore, true);
        Model::validateRequired('faceComparisonScore', $this->faceComparisonScore, true);
        Model::validateRequired('idCardFaceComparisonScore', $this->idCardFaceComparisonScore, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('verifyStatus', $this->verifyStatus, true);
        Model::validateRequired('material', $this->material, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorityComparisionScore) {
            $res['AuthorityComparisionScore'] = $this->authorityComparisionScore;
        }
        if (null !== $this->faceComparisonScore) {
            $res['FaceComparisonScore'] = $this->faceComparisonScore;
        }
        if (null !== $this->idCardFaceComparisonScore) {
            $res['IdCardFaceComparisonScore'] = $this->idCardFaceComparisonScore;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->verifyStatus) {
            $res['VerifyStatus'] = $this->verifyStatus;
        }
        if (null !== $this->material) {
            $res['Material'] = null !== $this->material ? $this->material->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVerifyResultResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorityComparisionScore'])) {
            $model->authorityComparisionScore = $map['AuthorityComparisionScore'];
        }
        if (isset($map['FaceComparisonScore'])) {
            $model->faceComparisonScore = $map['FaceComparisonScore'];
        }
        if (isset($map['IdCardFaceComparisonScore'])) {
            $model->idCardFaceComparisonScore = $map['IdCardFaceComparisonScore'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['VerifyStatus'])) {
            $model->verifyStatus = $map['VerifyStatus'];
        }
        if (isset($map['Material'])) {
            $model->material = material::fromMap($map['Material']);
        }

        return $model;
    }
}
