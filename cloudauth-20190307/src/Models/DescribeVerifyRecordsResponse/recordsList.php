<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyRecordsResponse;

use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyRecordsResponse\recordsList\material;
use AlibabaCloud\Tea\Model;

class recordsList extends Model
{
    /**
     * @var float
     */
    public $authorityComparisonScore;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $bizType;

    /**
     * @var string
     */
    public $dataStats;

    /**
     * @var int
     */
    public $finishTime;

    /**
     * @var float
     */
    public $idCardFaceComparisonScore;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $verifyId;

    /**
     * @var material
     */
    public $material;
    protected $_name = [
        'authorityComparisonScore'  => 'AuthorityComparisonScore',
        'bizId'                     => 'BizId',
        'bizType'                   => 'BizType',
        'dataStats'                 => 'DataStats',
        'finishTime'                => 'FinishTime',
        'idCardFaceComparisonScore' => 'IdCardFaceComparisonScore',
        'status'                    => 'Status',
        'verifyId'                  => 'VerifyId',
        'material'                  => 'Material',
    ];

    public function validate()
    {
        Model::validateRequired('authorityComparisonScore', $this->authorityComparisonScore, true);
        Model::validateRequired('bizId', $this->bizId, true);
        Model::validateRequired('bizType', $this->bizType, true);
        Model::validateRequired('dataStats', $this->dataStats, true);
        Model::validateRequired('finishTime', $this->finishTime, true);
        Model::validateRequired('idCardFaceComparisonScore', $this->idCardFaceComparisonScore, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('verifyId', $this->verifyId, true);
        Model::validateRequired('material', $this->material, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorityComparisonScore) {
            $res['AuthorityComparisonScore'] = $this->authorityComparisonScore;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }
        if (null !== $this->dataStats) {
            $res['DataStats'] = $this->dataStats;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->idCardFaceComparisonScore) {
            $res['IdCardFaceComparisonScore'] = $this->idCardFaceComparisonScore;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->verifyId) {
            $res['VerifyId'] = $this->verifyId;
        }
        if (null !== $this->material) {
            $res['Material'] = null !== $this->material ? $this->material->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recordsList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorityComparisonScore'])) {
            $model->authorityComparisonScore = $map['AuthorityComparisonScore'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }
        if (isset($map['DataStats'])) {
            $model->dataStats = $map['DataStats'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['IdCardFaceComparisonScore'])) {
            $model->idCardFaceComparisonScore = $map['IdCardFaceComparisonScore'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VerifyId'])) {
            $model->verifyId = $map['VerifyId'];
        }
        if (isset($map['Material'])) {
            $model->material = material::fromMap($map['Material']);
        }

        return $model;
    }
}
