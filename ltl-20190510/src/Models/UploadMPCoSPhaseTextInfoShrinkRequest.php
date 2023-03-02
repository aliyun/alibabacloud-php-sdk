<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ltl\V20190510\Models;

use AlibabaCloud\Tea\Model;

class UploadMPCoSPhaseTextInfoShrinkRequest extends Model
{
    /**
     * @example 1.0.0
     *
     * @var string
     */
    public $apiVersion;

    /**
     * @example 489973087549****
     *
     * @var string
     */
    public $bizChainId;

    /**
     * @example 32bfce96b4e2f9bec0f2ea5cc2f14ace1486cc146d5832d3a84e5332fe89****
     *
     * @var string
     */
    public $dataKey;

    /**
     * @example be350cd52b0f47846f93df7d0d4febd86025ee6c028a6b22a6ff1ac6d3a2****
     *
     * @var string
     */
    public $dataSeq;

    /**
     * @example 987823074334****
     *
     * @var string
     */
    public $phaseData;

    /**
     * @example 383860792287****
     *
     * @var string
     */
    public $phaseGroupId;

    /**
     * @example 196487512811****
     *
     * @var string
     */
    public $phaseId;

    /**
     * @var string
     */
    public $relatedDataListShrink;
    protected $_name = [
        'apiVersion'            => 'ApiVersion',
        'bizChainId'            => 'BizChainId',
        'dataKey'               => 'DataKey',
        'dataSeq'               => 'DataSeq',
        'phaseData'             => 'PhaseData',
        'phaseGroupId'          => 'PhaseGroupId',
        'phaseId'               => 'PhaseId',
        'relatedDataListShrink' => 'RelatedDataList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiVersion) {
            $res['ApiVersion'] = $this->apiVersion;
        }
        if (null !== $this->bizChainId) {
            $res['BizChainId'] = $this->bizChainId;
        }
        if (null !== $this->dataKey) {
            $res['DataKey'] = $this->dataKey;
        }
        if (null !== $this->dataSeq) {
            $res['DataSeq'] = $this->dataSeq;
        }
        if (null !== $this->phaseData) {
            $res['PhaseData'] = $this->phaseData;
        }
        if (null !== $this->phaseGroupId) {
            $res['PhaseGroupId'] = $this->phaseGroupId;
        }
        if (null !== $this->phaseId) {
            $res['PhaseId'] = $this->phaseId;
        }
        if (null !== $this->relatedDataListShrink) {
            $res['RelatedDataList'] = $this->relatedDataListShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadMPCoSPhaseTextInfoShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiVersion'])) {
            $model->apiVersion = $map['ApiVersion'];
        }
        if (isset($map['BizChainId'])) {
            $model->bizChainId = $map['BizChainId'];
        }
        if (isset($map['DataKey'])) {
            $model->dataKey = $map['DataKey'];
        }
        if (isset($map['DataSeq'])) {
            $model->dataSeq = $map['DataSeq'];
        }
        if (isset($map['PhaseData'])) {
            $model->phaseData = $map['PhaseData'];
        }
        if (isset($map['PhaseGroupId'])) {
            $model->phaseGroupId = $map['PhaseGroupId'];
        }
        if (isset($map['PhaseId'])) {
            $model->phaseId = $map['PhaseId'];
        }
        if (isset($map['RelatedDataList'])) {
            $model->relatedDataListShrink = $map['RelatedDataList'];
        }

        return $model;
    }
}
