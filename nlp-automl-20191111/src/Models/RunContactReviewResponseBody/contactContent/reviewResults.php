<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlpautoml\V20191111\Models\RunContactReviewResponseBody\contactContent;

use AlibabaCloud\Tea\Model;

class reviewResults extends Model
{
    /**
     * @var string
     */
    public $riskLevel;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string[]
     */
    public $value;

    /**
     * @var string[]
     */
    public $startPosition;

    /**
     * @var string
     */
    public $modificationSuggestion;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string[]
     */
    public $endPosition;
    protected $_name = [
        'riskLevel'              => 'RiskLevel',
        'type'                   => 'Type',
        'value'                  => 'Value',
        'startPosition'          => 'StartPosition',
        'modificationSuggestion' => 'ModificationSuggestion',
        'reason'                 => 'Reason',
        'endPosition'            => 'EndPosition',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->riskLevel) {
            $res['RiskLevel'] = $this->riskLevel;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->startPosition) {
            $res['StartPosition'] = $this->startPosition;
        }
        if (null !== $this->modificationSuggestion) {
            $res['ModificationSuggestion'] = $this->modificationSuggestion;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->endPosition) {
            $res['EndPosition'] = $this->endPosition;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reviewResults
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RiskLevel'])) {
            $model->riskLevel = $map['RiskLevel'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Value'])) {
            if (!empty($map['Value'])) {
                $model->value = $map['Value'];
            }
        }
        if (isset($map['StartPosition'])) {
            if (!empty($map['StartPosition'])) {
                $model->startPosition = $map['StartPosition'];
            }
        }
        if (isset($map['ModificationSuggestion'])) {
            $model->modificationSuggestion = $map['ModificationSuggestion'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['EndPosition'])) {
            if (!empty($map['EndPosition'])) {
                $model->endPosition = $map['EndPosition'];
            }
        }

        return $model;
    }
}
