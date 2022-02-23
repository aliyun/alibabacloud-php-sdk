<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\SDK\Cloudauth\V20190307\Models\VerifyMaterialResponse\material;
use AlibabaCloud\Tea\Model;

class VerifyMaterialResponse extends Model
{
    /**
     * @var float
     */
    public $authorityComparisionScore;

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
     * @var string
     */
    public $verifyToken;

    /**
     * @var material
     */
    public $material;
    protected $_name = [
        'authorityComparisionScore' => 'AuthorityComparisionScore',
        'idCardFaceComparisonScore' => 'IdCardFaceComparisonScore',
        'requestId'                 => 'RequestId',
        'verifyStatus'              => 'VerifyStatus',
        'verifyToken'               => 'VerifyToken',
        'material'                  => 'Material',
    ];

    public function validate()
    {
        Model::validateRequired('authorityComparisionScore', $this->authorityComparisionScore, true);
        Model::validateRequired('idCardFaceComparisonScore', $this->idCardFaceComparisonScore, true);
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('verifyStatus', $this->verifyStatus, true);
        Model::validateRequired('verifyToken', $this->verifyToken, true);
        Model::validateRequired('material', $this->material, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorityComparisionScore) {
            $res['AuthorityComparisionScore'] = $this->authorityComparisionScore;
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
        if (null !== $this->verifyToken) {
            $res['VerifyToken'] = $this->verifyToken;
        }
        if (null !== $this->material) {
            $res['Material'] = null !== $this->material ? $this->material->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VerifyMaterialResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorityComparisionScore'])) {
            $model->authorityComparisionScore = $map['AuthorityComparisionScore'];
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
        if (isset($map['VerifyToken'])) {
            $model->verifyToken = $map['VerifyToken'];
        }
        if (isset($map['Material'])) {
            $model->material = material::fromMap($map['Material']);
        }

        return $model;
    }
}
