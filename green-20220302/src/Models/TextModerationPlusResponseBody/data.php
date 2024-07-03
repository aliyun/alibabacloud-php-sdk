<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\TextModerationPlusResponseBody;

use AlibabaCloud\SDK\Green\V20220302\Models\TextModerationPlusResponseBody\data\advice;
use AlibabaCloud\SDK\Green\V20220302\Models\TextModerationPlusResponseBody\data\result;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var advice[]
     */
    public $advice;

    /**
     * @var result[]
     */
    public $result;

    /**
     * @var string
     */
    public $riskLevel;

    /**
     * @example 1
     *
     * @var float
     */
    public $score;
    protected $_name = [
        'advice'    => 'Advice',
        'result'    => 'Result',
        'riskLevel' => 'RiskLevel',
        'score'     => 'Score',
    ];

    public function validate()
    {
    }

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
                $n             = 0;
                foreach ($map['Advice'] as $item) {
                    $model->advice[$n++] = null !== $item ? advice::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Result'])) {
            if (!empty($map['Result'])) {
                $model->result = [];
                $n             = 0;
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

        return $model;
    }
}
