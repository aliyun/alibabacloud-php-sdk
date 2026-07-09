<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIDeepSign\V20260511\Models\GetImageDetectionTaskResultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AIDeepSign\V20260511\Models\GetImageDetectionTaskResultResponseBody\tamper\baseResults;

class tamper extends Model
{
    /**
     * @var baseResults
     */
    public $baseResults;

    /**
     * @var string
     */
    public $llmResult;

    /**
     * @var string
     */
    public $riskCode;

    /**
     * @var string[]
     */
    public $riskReasons;
    protected $_name = [
        'baseResults' => 'BaseResults',
        'llmResult' => 'LlmResult',
        'riskCode' => 'RiskCode',
        'riskReasons' => 'RiskReasons',
    ];

    public function validate()
    {
        if (null !== $this->baseResults) {
            $this->baseResults->validate();
        }
        if (\is_array($this->riskReasons)) {
            Model::validateArray($this->riskReasons);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baseResults) {
            $res['BaseResults'] = null !== $this->baseResults ? $this->baseResults->toArray($noStream) : $this->baseResults;
        }

        if (null !== $this->llmResult) {
            $res['LlmResult'] = $this->llmResult;
        }

        if (null !== $this->riskCode) {
            $res['RiskCode'] = $this->riskCode;
        }

        if (null !== $this->riskReasons) {
            if (\is_array($this->riskReasons)) {
                $res['RiskReasons'] = [];
                $n1 = 0;
                foreach ($this->riskReasons as $item1) {
                    $res['RiskReasons'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['BaseResults'])) {
            $model->baseResults = baseResults::fromMap($map['BaseResults']);
        }

        if (isset($map['LlmResult'])) {
            $model->llmResult = $map['LlmResult'];
        }

        if (isset($map['RiskCode'])) {
            $model->riskCode = $map['RiskCode'];
        }

        if (isset($map['RiskReasons'])) {
            if (!empty($map['RiskReasons'])) {
                $model->riskReasons = [];
                $n1 = 0;
                foreach ($map['RiskReasons'] as $item1) {
                    $model->riskReasons[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
