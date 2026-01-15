<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\TextModerationPlusResponseBody\data\result;

use AlibabaCloud\Dara\Model;

class riskPositions extends Model
{
    /**
     * @var int
     */
    public $endPos;

    /**
     * @var string
     */
    public $riskWord;

    /**
     * @var int
     */
    public $startPos;
    protected $_name = [
        'endPos' => 'EndPos',
        'riskWord' => 'RiskWord',
        'startPos' => 'StartPos',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endPos) {
            $res['EndPos'] = $this->endPos;
        }

        if (null !== $this->riskWord) {
            $res['RiskWord'] = $this->riskWord;
        }

        if (null !== $this->startPos) {
            $res['StartPos'] = $this->startPos;
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
        if (isset($map['EndPos'])) {
            $model->endPos = $map['EndPos'];
        }

        if (isset($map['RiskWord'])) {
            $model->riskWord = $map['RiskWord'];
        }

        if (isset($map['StartPos'])) {
            $model->startPos = $map['StartPos'];
        }

        return $model;
    }
}
