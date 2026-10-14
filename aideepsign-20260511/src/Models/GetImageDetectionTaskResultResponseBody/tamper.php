<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIDeepSign\V20260511\Models\GetImageDetectionTaskResultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\GetImageDetectionTaskResultResponseBody\tamper\baseResults;

class tamper extends Model
{
    /**
     * @var string
     */
    public $aiWatermark;

    /**
     * @var baseResults
     */
    public $baseResults;

    /**
     * @var string
     */
    public $finalConclusion;

    /**
     * @var string
     */
    public $llmResult;

    /**
     * @var string
     */
    public $metadataAiFlag;

    /**
     * @var string
     */
    public $metadataAiSource;

    /**
     * @var string
     */
    public $riskLevel;
    protected $_name = [
        'aiWatermark' => 'AiWatermark',
        'baseResults' => 'BaseResults',
        'finalConclusion' => 'FinalConclusion',
        'llmResult' => 'LlmResult',
        'metadataAiFlag' => 'MetadataAiFlag',
        'metadataAiSource' => 'MetadataAiSource',
        'riskLevel' => 'RiskLevel',
    ];

    public function validate()
    {
        if (null !== $this->baseResults) {
            $this->baseResults->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aiWatermark) {
            $res['AiWatermark'] = $this->aiWatermark;
        }

        if (null !== $this->baseResults) {
            $res['BaseResults'] = null !== $this->baseResults ? $this->baseResults->toArray($noStream) : $this->baseResults;
        }

        if (null !== $this->finalConclusion) {
            $res['FinalConclusion'] = $this->finalConclusion;
        }

        if (null !== $this->llmResult) {
            $res['LlmResult'] = $this->llmResult;
        }

        if (null !== $this->metadataAiFlag) {
            $res['MetadataAiFlag'] = $this->metadataAiFlag;
        }

        if (null !== $this->metadataAiSource) {
            $res['MetadataAiSource'] = $this->metadataAiSource;
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
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
        if (isset($map['AiWatermark'])) {
            $model->aiWatermark = $map['AiWatermark'];
        }

        if (isset($map['BaseResults'])) {
            $model->baseResults = baseResults::fromMap($map['BaseResults']);
        }

        if (isset($map['FinalConclusion'])) {
            $model->finalConclusion = $map['FinalConclusion'];
        }

        if (isset($map['LlmResult'])) {
            $model->llmResult = $map['LlmResult'];
        }

        if (isset($map['MetadataAiFlag'])) {
            $model->metadataAiFlag = $map['MetadataAiFlag'];
        }

        if (isset($map['MetadataAiSource'])) {
            $model->metadataAiSource = $map['MetadataAiSource'];
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        return $model;
    }
}
