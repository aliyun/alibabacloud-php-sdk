<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityEvaluationTaskInstanceResponseBody\dataQualityEvaluationTaskInstance\results\rule;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityEvaluationTaskInstanceResponseBody\dataQualityEvaluationTaskInstance\results\rule\checkingConfig\thresholds;

class checkingConfig extends Model
{
    /**
     * @var string
     */
    public $referencedSamplesFilter;

    /**
     * @var thresholds
     */
    public $thresholds;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'referencedSamplesFilter' => 'ReferencedSamplesFilter',
        'thresholds' => 'Thresholds',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->thresholds) {
            $this->thresholds->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->referencedSamplesFilter) {
            $res['ReferencedSamplesFilter'] = $this->referencedSamplesFilter;
        }

        if (null !== $this->thresholds) {
            $res['Thresholds'] = null !== $this->thresholds ? $this->thresholds->toArray($noStream) : $this->thresholds;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['ReferencedSamplesFilter'])) {
            $model->referencedSamplesFilter = $map['ReferencedSamplesFilter'];
        }

        if (isset($map['Thresholds'])) {
            $model->thresholds = thresholds::fromMap($map['Thresholds']);
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
