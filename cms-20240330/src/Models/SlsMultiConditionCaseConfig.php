<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class SlsMultiConditionCaseConfig extends Model
{
    /**
     * @var string
     */
    public $countOperator;

    /**
     * @var int
     */
    public $countThreshold;

    /**
     * @var string
     */
    public $matchField;

    /**
     * @var string
     */
    public $matchOperator;

    /**
     * @var string
     */
    public $matchValue;

    /**
     * @var string
     */
    public $severity;
    protected $_name = [
        'countOperator' => 'countOperator',
        'countThreshold' => 'countThreshold',
        'matchField' => 'matchField',
        'matchOperator' => 'matchOperator',
        'matchValue' => 'matchValue',
        'severity' => 'severity',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->countOperator) {
            $res['countOperator'] = $this->countOperator;
        }

        if (null !== $this->countThreshold) {
            $res['countThreshold'] = $this->countThreshold;
        }

        if (null !== $this->matchField) {
            $res['matchField'] = $this->matchField;
        }

        if (null !== $this->matchOperator) {
            $res['matchOperator'] = $this->matchOperator;
        }

        if (null !== $this->matchValue) {
            $res['matchValue'] = $this->matchValue;
        }

        if (null !== $this->severity) {
            $res['severity'] = $this->severity;
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
        if (isset($map['countOperator'])) {
            $model->countOperator = $map['countOperator'];
        }

        if (isset($map['countThreshold'])) {
            $model->countThreshold = $map['countThreshold'];
        }

        if (isset($map['matchField'])) {
            $model->matchField = $map['matchField'];
        }

        if (isset($map['matchOperator'])) {
            $model->matchOperator = $map['matchOperator'];
        }

        if (isset($map['matchValue'])) {
            $model->matchValue = $map['matchValue'];
        }

        if (isset($map['severity'])) {
            $model->severity = $map['severity'];
        }

        return $model;
    }
}
