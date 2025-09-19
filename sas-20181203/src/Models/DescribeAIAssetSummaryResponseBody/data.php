<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAIAssetSummaryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAIAssetSummaryResponseBody\data\sensitiveSummary;

class data extends Model
{
    /**
     * @var int
     */
    public $aispmRiskAssetCnt;

    /**
     * @var int
     */
    public $ecsAssetCnt;

    /**
     * @var int
     */
    public $exposedRiskAssetCnt;

    /**
     * @var int
     */
    public $imageAssetCnt;

    /**
     * @var int
     */
    public $lingjunAssetCnt;

    /**
     * @var int
     */
    public $paiContainerCnt;

    /**
     * @var int
     */
    public $paiInstanceCnt;

    /**
     * @var int
     */
    public $paiServerlessAssetCnt;

    /**
     * @var sensitiveSummary
     */
    public $sensitiveSummary;

    /**
     * @var int
     */
    public $snapshotAssetCnt;

    /**
     * @var int
     */
    public $totalAssetCnt;

    /**
     * @var int
     */
    public $totalRiskCnt;

    /**
     * @var int
     */
    public $vulRiskAssetCnt;
    protected $_name = [
        'aispmRiskAssetCnt' => 'AispmRiskAssetCnt',
        'ecsAssetCnt' => 'EcsAssetCnt',
        'exposedRiskAssetCnt' => 'ExposedRiskAssetCnt',
        'imageAssetCnt' => 'ImageAssetCnt',
        'lingjunAssetCnt' => 'LingjunAssetCnt',
        'paiContainerCnt' => 'PaiContainerCnt',
        'paiInstanceCnt' => 'PaiInstanceCnt',
        'paiServerlessAssetCnt' => 'PaiServerlessAssetCnt',
        'sensitiveSummary' => 'SensitiveSummary',
        'snapshotAssetCnt' => 'SnapshotAssetCnt',
        'totalAssetCnt' => 'TotalAssetCnt',
        'totalRiskCnt' => 'TotalRiskCnt',
        'vulRiskAssetCnt' => 'VulRiskAssetCnt',
    ];

    public function validate()
    {
        if (null !== $this->sensitiveSummary) {
            $this->sensitiveSummary->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aispmRiskAssetCnt) {
            $res['AispmRiskAssetCnt'] = $this->aispmRiskAssetCnt;
        }

        if (null !== $this->ecsAssetCnt) {
            $res['EcsAssetCnt'] = $this->ecsAssetCnt;
        }

        if (null !== $this->exposedRiskAssetCnt) {
            $res['ExposedRiskAssetCnt'] = $this->exposedRiskAssetCnt;
        }

        if (null !== $this->imageAssetCnt) {
            $res['ImageAssetCnt'] = $this->imageAssetCnt;
        }

        if (null !== $this->lingjunAssetCnt) {
            $res['LingjunAssetCnt'] = $this->lingjunAssetCnt;
        }

        if (null !== $this->paiContainerCnt) {
            $res['PaiContainerCnt'] = $this->paiContainerCnt;
        }

        if (null !== $this->paiInstanceCnt) {
            $res['PaiInstanceCnt'] = $this->paiInstanceCnt;
        }

        if (null !== $this->paiServerlessAssetCnt) {
            $res['PaiServerlessAssetCnt'] = $this->paiServerlessAssetCnt;
        }

        if (null !== $this->sensitiveSummary) {
            $res['SensitiveSummary'] = null !== $this->sensitiveSummary ? $this->sensitiveSummary->toArray($noStream) : $this->sensitiveSummary;
        }

        if (null !== $this->snapshotAssetCnt) {
            $res['SnapshotAssetCnt'] = $this->snapshotAssetCnt;
        }

        if (null !== $this->totalAssetCnt) {
            $res['TotalAssetCnt'] = $this->totalAssetCnt;
        }

        if (null !== $this->totalRiskCnt) {
            $res['TotalRiskCnt'] = $this->totalRiskCnt;
        }

        if (null !== $this->vulRiskAssetCnt) {
            $res['VulRiskAssetCnt'] = $this->vulRiskAssetCnt;
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
        if (isset($map['AispmRiskAssetCnt'])) {
            $model->aispmRiskAssetCnt = $map['AispmRiskAssetCnt'];
        }

        if (isset($map['EcsAssetCnt'])) {
            $model->ecsAssetCnt = $map['EcsAssetCnt'];
        }

        if (isset($map['ExposedRiskAssetCnt'])) {
            $model->exposedRiskAssetCnt = $map['ExposedRiskAssetCnt'];
        }

        if (isset($map['ImageAssetCnt'])) {
            $model->imageAssetCnt = $map['ImageAssetCnt'];
        }

        if (isset($map['LingjunAssetCnt'])) {
            $model->lingjunAssetCnt = $map['LingjunAssetCnt'];
        }

        if (isset($map['PaiContainerCnt'])) {
            $model->paiContainerCnt = $map['PaiContainerCnt'];
        }

        if (isset($map['PaiInstanceCnt'])) {
            $model->paiInstanceCnt = $map['PaiInstanceCnt'];
        }

        if (isset($map['PaiServerlessAssetCnt'])) {
            $model->paiServerlessAssetCnt = $map['PaiServerlessAssetCnt'];
        }

        if (isset($map['SensitiveSummary'])) {
            $model->sensitiveSummary = sensitiveSummary::fromMap($map['SensitiveSummary']);
        }

        if (isset($map['SnapshotAssetCnt'])) {
            $model->snapshotAssetCnt = $map['SnapshotAssetCnt'];
        }

        if (isset($map['TotalAssetCnt'])) {
            $model->totalAssetCnt = $map['TotalAssetCnt'];
        }

        if (isset($map['TotalRiskCnt'])) {
            $model->totalRiskCnt = $map['TotalRiskCnt'];
        }

        if (isset($map['VulRiskAssetCnt'])) {
            $model->vulRiskAssetCnt = $map['VulRiskAssetCnt'];
        }

        return $model;
    }
}
