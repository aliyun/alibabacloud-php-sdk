<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ltl\V20190510\Models;

use AlibabaCloud\Tea\Model;

class UploadMPCoSPhaseTextInfoByDeviceRequest extends Model
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
     * @example ID2
     *
     * @var string
     */
    public $iotAuthType;

    /**
     * @example 94894989498FDDABD51698BD1A49BF1AFB0AA94FAA8DB65A689164BEED******
     *
     * @var string
     */
    public $iotDataDigest;

    /**
     * @example 183329761572****
     *
     * @var string
     */
    public $iotId;

    /**
     * @example 94894989498FDDABD51698BD1A49BF1AFB0AA94FAA8DB65A689164BEED******
     *
     * @var string
     */
    public $iotIdServiceProvider;

    /**
     * @example 2
     *
     * @var string
     */
    public $iotIdSource;

    /**
     * @example 2~2~192ADFB498AA****~1579198300000~J8E891NAgAhwHBHm8******\/hnswr698HSb09ahS8709bn9s03jg98u4jg******
     *
     * @var string
     */
    public $iotSignature;

    /**
     * @var string
     */
    public $phaseData;

    /**
     * @example 987823074334****
     *
     * @var string
     */
    public $phaseGroupId;

    /**
     * @example 644208887511****
     *
     * @var string
     */
    public $phaseId;

    /**
     * @var mixed[]
     */
    public $relatedDataList;
    protected $_name = [
        'apiVersion'           => 'ApiVersion',
        'bizChainId'           => 'BizChainId',
        'dataKey'              => 'DataKey',
        'dataSeq'              => 'DataSeq',
        'iotAuthType'          => 'IotAuthType',
        'iotDataDigest'        => 'IotDataDigest',
        'iotId'                => 'IotId',
        'iotIdServiceProvider' => 'IotIdServiceProvider',
        'iotIdSource'          => 'IotIdSource',
        'iotSignature'         => 'IotSignature',
        'phaseData'            => 'PhaseData',
        'phaseGroupId'         => 'PhaseGroupId',
        'phaseId'              => 'PhaseId',
        'relatedDataList'      => 'RelatedDataList',
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
        if (null !== $this->iotAuthType) {
            $res['IotAuthType'] = $this->iotAuthType;
        }
        if (null !== $this->iotDataDigest) {
            $res['IotDataDigest'] = $this->iotDataDigest;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->iotIdServiceProvider) {
            $res['IotIdServiceProvider'] = $this->iotIdServiceProvider;
        }
        if (null !== $this->iotIdSource) {
            $res['IotIdSource'] = $this->iotIdSource;
        }
        if (null !== $this->iotSignature) {
            $res['IotSignature'] = $this->iotSignature;
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
        if (null !== $this->relatedDataList) {
            $res['RelatedDataList'] = $this->relatedDataList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadMPCoSPhaseTextInfoByDeviceRequest
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
        if (isset($map['IotAuthType'])) {
            $model->iotAuthType = $map['IotAuthType'];
        }
        if (isset($map['IotDataDigest'])) {
            $model->iotDataDigest = $map['IotDataDigest'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['IotIdServiceProvider'])) {
            $model->iotIdServiceProvider = $map['IotIdServiceProvider'];
        }
        if (isset($map['IotIdSource'])) {
            $model->iotIdSource = $map['IotIdSource'];
        }
        if (isset($map['IotSignature'])) {
            $model->iotSignature = $map['IotSignature'];
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
            $model->relatedDataList = $map['RelatedDataList'];
        }

        return $model;
    }
}
