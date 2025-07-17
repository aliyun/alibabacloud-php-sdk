<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\TextModerationPlusResponseBody;

use AlibabaCloud\SDK\Green\V20220302\Models\TextModerationPlusResponseBody\data\advice;
use AlibabaCloud\SDK\Green\V20220302\Models\TextModerationPlusResponseBody\data\attackResult;
use AlibabaCloud\SDK\Green\V20220302\Models\TextModerationPlusResponseBody\data\result;
use AlibabaCloud\SDK\Green\V20220302\Models\TextModerationPlusResponseBody\data\sensitiveResult;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The suggestion.
     *
     * @var advice[]
     */
    public $advice;

    /**
     * @description The level of prompt attack
     *
     * @example none
     *
     * @var string
     */
    public $attackLevel;

    /**
     * @description The result of prompt attack detect
     *
     * @var attackResult[]
     */
    public $attackResult;

    /**
     * @description The id of data
     *
     * @example text1234
     *
     * @var string
     */
    public $dataId;

    /**
     * @var string
     */
    public $detectedLanguage;

    /**
     * @var string
     */
    public $manualTaskId;

    /**
     * @description The results.
     *
     * @var result[]
     */
    public $result;

    /**
     * @description Risk Level
     *
     * @example high
     *
     * @var string
     */
    public $riskLevel;

    /**
     * @description The score.
     *
     * @example 1
     *
     * @var float
     */
    public $score;

    /**
     * @description The level of sensitivity data
     *
     * @example S0
     *
     * @var string
     */
    public $sensitiveLevel;

    /**
     * @description The result of sensitivity data detect
     *
     * @var sensitiveResult[]
     */
    public $sensitiveResult;

    /**
     * @var string
     */
    public $translatedContent;
    protected $_name = [
        'advice' => 'Advice',
        'attackLevel' => 'AttackLevel',
        'attackResult' => 'AttackResult',
        'dataId' => 'DataId',
        'detectedLanguage' => 'DetectedLanguage',
        'manualTaskId' => 'ManualTaskId',
        'result' => 'Result',
        'riskLevel' => 'RiskLevel',
        'score' => 'Score',
        'sensitiveLevel' => 'SensitiveLevel',
        'sensitiveResult' => 'SensitiveResult',
        'translatedContent' => 'TranslatedContent',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->advice) {
            $res['Advice'] = [];
            if (null !== $this->advice && \is_array($this->advice)) {
                $n = 0;
                foreach ($this->advice as $item) {
                    $res['Advice'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->attackLevel) {
            $res['AttackLevel'] = $this->attackLevel;
        }
        if (null !== $this->attackResult) {
            $res['AttackResult'] = [];
            if (null !== $this->attackResult && \is_array($this->attackResult)) {
                $n = 0;
                foreach ($this->attackResult as $item) {
                    $res['AttackResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->detectedLanguage) {
            $res['DetectedLanguage'] = $this->detectedLanguage;
        }
        if (null !== $this->manualTaskId) {
            $res['ManualTaskId'] = $this->manualTaskId;
        }
        if (null !== $this->result) {
            $res['Result'] = [];
            if (null !== $this->result && \is_array($this->result)) {
                $n = 0;
                foreach ($this->result as $item) {
                    $res['Result'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->sensitiveLevel) {
            $res['SensitiveLevel'] = $this->sensitiveLevel;
        }
        if (null !== $this->sensitiveResult) {
            $res['SensitiveResult'] = [];
            if (null !== $this->sensitiveResult && \is_array($this->sensitiveResult)) {
                $n = 0;
                foreach ($this->sensitiveResult as $item) {
                    $res['SensitiveResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->translatedContent) {
            $res['TranslatedContent'] = $this->translatedContent;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Advice'])) {
            if (!empty($map['Advice'])) {
                $model->advice = [];
                $n = 0;
                foreach ($map['Advice'] as $item) {
                    $model->advice[$n++] = null !== $item ? advice::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['AttackLevel'])) {
            $model->attackLevel = $map['AttackLevel'];
        }
        if (isset($map['AttackResult'])) {
            if (!empty($map['AttackResult'])) {
                $model->attackResult = [];
                $n = 0;
                foreach ($map['AttackResult'] as $item) {
                    $model->attackResult[$n++] = null !== $item ? attackResult::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['DetectedLanguage'])) {
            $model->detectedLanguage = $map['DetectedLanguage'];
        }
        if (isset($map['ManualTaskId'])) {
            $model->manualTaskId = $map['ManualTaskId'];
        }
        if (isset($map['Result'])) {
            if (!empty($map['Result'])) {
                $model->result = [];
                $n = 0;
                foreach ($map['Result'] as $item) {
                    $model->result[$n++] = null !== $item ? result::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['SensitiveLevel'])) {
            $model->sensitiveLevel = $map['SensitiveLevel'];
        }
        if (isset($map['SensitiveResult'])) {
            if (!empty($map['SensitiveResult'])) {
                $model->sensitiveResult = [];
                $n = 0;
                foreach ($map['SensitiveResult'] as $item) {
                    $model->sensitiveResult[$n++] = null !== $item ? sensitiveResult::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TranslatedContent'])) {
            $model->translatedContent = $map['TranslatedContent'];
        }

        return $model;
    }
}
