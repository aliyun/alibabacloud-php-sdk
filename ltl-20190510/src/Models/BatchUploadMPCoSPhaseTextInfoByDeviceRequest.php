<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ltl\V20190510\Models;

use AlibabaCloud\Tea\Model;

class BatchUploadMPCoSPhaseTextInfoByDeviceRequest extends Model
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
     * @example g9R4ghe****
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
     * @var mixed[]
     */
    public $phaseDataList;

    /**
     * @example 383860792287****
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
    protected $_name = [
        'apiVersion'           => 'ApiVersion',
        'bizChainId'           => 'BizChainId',
        'iotAuthType'          => 'IotAuthType',
        'iotDataDigest'        => 'IotDataDigest',
        'iotId'                => 'IotId',
        'iotIdServiceProvider' => 'IotIdServiceProvider',
        'iotIdSource'          => 'IotIdSource',
        'iotSignature'         => 'IotSignature',
        'phaseDataList'        => 'PhaseDataList',
        'phaseGroupId'         => 'PhaseGroupId',
        'phaseId'              => 'PhaseId',
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
        if (null !== $this->phaseDataList) {
            $res['PhaseDataList'] = $this->phaseDataList;
        }
        if (null !== $this->phaseGroupId) {
            $res['PhaseGroupId'] = $this->phaseGroupId;
        }
        if (null !== $this->phaseId) {
            $res['PhaseId'] = $this->phaseId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchUploadMPCoSPhaseTextInfoByDeviceRequest
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
        if (isset($map['PhaseDataList'])) {
            $model->phaseDataList = $map['PhaseDataList'];
        }
        if (isset($map['PhaseGroupId'])) {
            $model->phaseGroupId = $map['PhaseGroupId'];
        }
        if (isset($map['PhaseId'])) {
            $model->phaseId = $map['PhaseId'];
        }

        return $model;
    }
}
