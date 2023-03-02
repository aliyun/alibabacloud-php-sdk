<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ltl\V20190510\Models;

use AlibabaCloud\Tea\Model;

class BatchUploadMPCoSPhaseTextInfoShrinkRequest extends Model
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
     * @var string
     */
    public $phaseDataListShrink;

    /**
     * @example 987823074334****
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
    protected $_name = [
        'apiVersion'          => 'ApiVersion',
        'bizChainId'          => 'BizChainId',
        'phaseDataListShrink' => 'PhaseDataList',
        'phaseGroupId'        => 'PhaseGroupId',
        'phaseId'             => 'PhaseId',
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
        if (null !== $this->phaseDataListShrink) {
            $res['PhaseDataList'] = $this->phaseDataListShrink;
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
     * @return BatchUploadMPCoSPhaseTextInfoShrinkRequest
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
        if (isset($map['PhaseDataList'])) {
            $model->phaseDataListShrink = $map['PhaseDataList'];
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
