<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyRecordsResponseBody;

use AlibabaCloud\SDK\Cloudauth\V20190307\Models\DescribeVerifyRecordsResponseBody\recordsList\material;
use AlibabaCloud\Tea\Model;

class recordsList extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $finishTime;

    /**
     * @var material
     */
    public $material;

    /**
     * @var float
     */
    public $idCardFaceComparisonScore;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $verifyId;

    /**
     * @var float
     */
    public $authorityComparisonScore;

    /**
     * @var string
     */
    public $dataStats;

    /**
     * @var string
     */
    public $bizType;
    protected $_name = [
        'status'                    => 'Status',
        'finishTime'                => 'FinishTime',
        'material'                  => 'Material',
        'idCardFaceComparisonScore' => 'IdCardFaceComparisonScore',
        'bizId'                     => 'BizId',
        'verifyId'                  => 'VerifyId',
        'authorityComparisonScore'  => 'AuthorityComparisonScore',
        'dataStats'                 => 'DataStats',
        'bizType'                   => 'BizType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->finishTime) {
            $res['FinishTime'] = $this->finishTime;
        }
        if (null !== $this->material) {
            $res['Material'] = null !== $this->material ? $this->material->toMap() : null;
        }
        if (null !== $this->idCardFaceComparisonScore) {
            $res['IdCardFaceComparisonScore'] = $this->idCardFaceComparisonScore;
        }
        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }
        if (null !== $this->verifyId) {
            $res['VerifyId'] = $this->verifyId;
        }
        if (null !== $this->authorityComparisonScore) {
            $res['AuthorityComparisonScore'] = $this->authorityComparisonScore;
        }
        if (null !== $this->dataStats) {
            $res['DataStats'] = $this->dataStats;
        }
        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['FinishTime'])) {
            $model->finishTime = $map['FinishTime'];
        }
        if (isset($map['Material'])) {
            $model->material = material::fromMap($map['Material']);
        }
        if (isset($map['IdCardFaceComparisonScore'])) {
            $model->idCardFaceComparisonScore = $map['IdCardFaceComparisonScore'];
        }
        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }
        if (isset($map['VerifyId'])) {
            $model->verifyId = $map['VerifyId'];
        }
        if (isset($map['AuthorityComparisonScore'])) {
            $model->authorityComparisonScore = $map['AuthorityComparisonScore'];
        }
        if (isset($map['DataStats'])) {
            $model->dataStats = $map['DataStats'];
        }
        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        return $model;
    }
}
