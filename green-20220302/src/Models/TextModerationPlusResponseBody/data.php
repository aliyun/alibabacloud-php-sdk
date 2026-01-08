<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\TextModerationPlusResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220302\Models\TextModerationPlusResponseBody\data\advice;
use AlibabaCloud\SDK\Green\V20220302\Models\TextModerationPlusResponseBody\data\attackResult;
use AlibabaCloud\SDK\Green\V20220302\Models\TextModerationPlusResponseBody\data\ext;
use AlibabaCloud\SDK\Green\V20220302\Models\TextModerationPlusResponseBody\data\result;
use AlibabaCloud\SDK\Green\V20220302\Models\TextModerationPlusResponseBody\data\sensitiveResult;

class data extends Model
{
    /**
     * @var string
     */
    public $accountId;

    /**
     * @var advice[]
     */
    public $advice;

    /**
     * @var string
     */
    public $attackLevel;

    /**
     * @var attackResult[]
     */
    public $attackResult;

    /**
     * @var string
     */
    public $dataId;

    /**
     * @var string
     */
    public $detectedLanguage;

    /**
     * @var ext
     */
    public $ext;

    /**
     * @var string
     */
    public $manualTaskId;

    /**
     * @var result[]
     */
    public $result;

    /**
     * @var string
     */
    public $riskLevel;

    /**
     * @var float
     */
    public $score;

    /**
     * @var string
     */
    public $sensitiveLevel;

    /**
     * @var sensitiveResult[]
     */
    public $sensitiveResult;

    /**
     * @var string
     */
    public $translatedContent;
    protected $_name = [
        'accountId' => 'AccountId',
        'advice' => 'Advice',
        'attackLevel' => 'AttackLevel',
        'attackResult' => 'AttackResult',
        'dataId' => 'DataId',
        'detectedLanguage' => 'DetectedLanguage',
        'ext' => 'Ext',
        'manualTaskId' => 'ManualTaskId',
        'result' => 'Result',
        'riskLevel' => 'RiskLevel',
        'score' => 'Score',
        'sensitiveLevel' => 'SensitiveLevel',
        'sensitiveResult' => 'SensitiveResult',
        'translatedContent' => 'TranslatedContent',
    ];

    public function validate()
    {
        if (\is_array($this->advice)) {
            Model::validateArray($this->advice);
        }
        if (\is_array($this->attackResult)) {
            Model::validateArray($this->attackResult);
        }
        if (null !== $this->ext) {
            $this->ext->validate();
        }
        if (\is_array($this->result)) {
            Model::validateArray($this->result);
        }
        if (\is_array($this->sensitiveResult)) {
            Model::validateArray($this->sensitiveResult);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }

        if (null !== $this->advice) {
            if (\is_array($this->advice)) {
                $res['Advice'] = [];
                $n1 = 0;
                foreach ($this->advice as $item1) {
                    $res['Advice'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->attackLevel) {
            $res['AttackLevel'] = $this->attackLevel;
        }

        if (null !== $this->attackResult) {
            if (\is_array($this->attackResult)) {
                $res['AttackResult'] = [];
                $n1 = 0;
                foreach ($this->attackResult as $item1) {
                    $res['AttackResult'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }

        if (null !== $this->detectedLanguage) {
            $res['DetectedLanguage'] = $this->detectedLanguage;
        }

        if (null !== $this->ext) {
            $res['Ext'] = null !== $this->ext ? $this->ext->toArray($noStream) : $this->ext;
        }

        if (null !== $this->manualTaskId) {
            $res['ManualTaskId'] = $this->manualTaskId;
        }

        if (null !== $this->result) {
            if (\is_array($this->result)) {
                $res['Result'] = [];
                $n1 = 0;
                foreach ($this->result as $item1) {
                    $res['Result'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->sensitiveResult)) {
                $res['SensitiveResult'] = [];
                $n1 = 0;
                foreach ($this->sensitiveResult as $item1) {
                    $res['SensitiveResult'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->translatedContent) {
            $res['TranslatedContent'] = $this->translatedContent;
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
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }

        if (isset($map['Advice'])) {
            if (!empty($map['Advice'])) {
                $model->advice = [];
                $n1 = 0;
                foreach ($map['Advice'] as $item1) {
                    $model->advice[$n1] = advice::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['AttackLevel'])) {
            $model->attackLevel = $map['AttackLevel'];
        }

        if (isset($map['AttackResult'])) {
            if (!empty($map['AttackResult'])) {
                $model->attackResult = [];
                $n1 = 0;
                foreach ($map['AttackResult'] as $item1) {
                    $model->attackResult[$n1] = attackResult::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }

        if (isset($map['DetectedLanguage'])) {
            $model->detectedLanguage = $map['DetectedLanguage'];
        }

        if (isset($map['Ext'])) {
            $model->ext = ext::fromMap($map['Ext']);
        }

        if (isset($map['ManualTaskId'])) {
            $model->manualTaskId = $map['ManualTaskId'];
        }

        if (isset($map['Result'])) {
            if (!empty($map['Result'])) {
                $model->result = [];
                $n1 = 0;
                foreach ($map['Result'] as $item1) {
                    $model->result[$n1] = result::fromMap($item1);
                    ++$n1;
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
                $n1 = 0;
                foreach ($map['SensitiveResult'] as $item1) {
                    $model->sensitiveResult[$n1] = sensitiveResult::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TranslatedContent'])) {
            $model->translatedContent = $map['TranslatedContent'];
        }

        return $model;
    }
}
