<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\TextModerationPlusResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220302\Models\TextModerationPlusResponseBody\data\advice;
use AlibabaCloud\SDK\Green\V20220302\Models\TextModerationPlusResponseBody\data\result;

class data extends Model
{
    /**
     * @var advice[]
     */
    public $advice;
    /**
     * @var string
     */
    public $dataId;
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
    protected $_name = [
        'advice'    => 'Advice',
        'dataId'    => 'DataId',
        'result'    => 'Result',
        'riskLevel' => 'RiskLevel',
        'score'     => 'Score',
    ];

    public function validate()
    {
        if (\is_array($this->advice)) {
            Model::validateArray($this->advice);
        }
        if (\is_array($this->result)) {
            Model::validateArray($this->result);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->advice) {
            if (\is_array($this->advice)) {
                $res['Advice'] = [];
                $n1            = 0;
                foreach ($this->advice as $item1) {
                    $res['Advice'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }

        if (null !== $this->result) {
            if (\is_array($this->result)) {
                $res['Result'] = [];
                $n1            = 0;
                foreach ($this->result as $item1) {
                    $res['Result'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }

        if (null !== $this->score) {
            $res['Score'] = $this->score;
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
        if (isset($map['Advice'])) {
            if (!empty($map['Advice'])) {
                $model->advice = [];
                $n1            = 0;
                foreach ($map['Advice'] as $item1) {
                    $model->advice[$n1++] = advice::fromMap($item1);
                }
            }
        }

        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }

        if (isset($map['Result'])) {
            if (!empty($map['Result'])) {
                $model->result = [];
                $n1            = 0;
                foreach ($map['Result'] as $item1) {
                    $model->result[$n1++] = result::fromMap($item1);
                }
            }
        }

        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }

        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }

        return $model;
    }
}
