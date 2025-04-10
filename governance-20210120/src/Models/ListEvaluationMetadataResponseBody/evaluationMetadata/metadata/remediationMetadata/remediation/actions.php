<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationMetadataResponseBody\evaluationMetadata\metadata\remediationMetadata\remediation;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationMetadataResponseBody\evaluationMetadata\metadata\remediationMetadata\remediation\actions\guidance;

class actions extends Model
{
    /**
     * @var string
     */
    public $classification;

    /**
     * @var string
     */
    public $costDescription;

    /**
     * @var string
     */
    public $description;

    /**
     * @var guidance[]
     */
    public $guidance;

    /**
     * @var string
     */
    public $notice;

    /**
     * @var string
     */
    public $suggestion;
    protected $_name = [
        'classification' => 'Classification',
        'costDescription' => 'CostDescription',
        'description' => 'Description',
        'guidance' => 'Guidance',
        'notice' => 'Notice',
        'suggestion' => 'Suggestion',
    ];

    public function validate()
    {
        if (\is_array($this->guidance)) {
            Model::validateArray($this->guidance);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->classification) {
            $res['Classification'] = $this->classification;
        }

        if (null !== $this->costDescription) {
            $res['CostDescription'] = $this->costDescription;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->guidance) {
            if (\is_array($this->guidance)) {
                $res['Guidance'] = [];
                $n1 = 0;
                foreach ($this->guidance as $item1) {
                    $res['Guidance'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->notice) {
            $res['Notice'] = $this->notice;
        }

        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
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
        if (isset($map['Classification'])) {
            $model->classification = $map['Classification'];
        }

        if (isset($map['CostDescription'])) {
            $model->costDescription = $map['CostDescription'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Guidance'])) {
            if (!empty($map['Guidance'])) {
                $model->guidance = [];
                $n1 = 0;
                foreach ($map['Guidance'] as $item1) {
                    $model->guidance[$n1++] = guidance::fromMap($item1);
                }
            }
        }

        if (isset($map['Notice'])) {
            $model->notice = $map['Notice'];
        }

        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }

        return $model;
    }
}
