<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationMetadataResponseBody\evaluationMetadata\metadata\remediationMetadata\remediation;

use AlibabaCloud\SDK\Governance\V20210120\Models\ListEvaluationMetadataResponseBody\evaluationMetadata\metadata\remediationMetadata\remediation\actions\guidance;
use AlibabaCloud\Tea\Model;

class actions extends Model
{
    /**
     * @description The fixing method.
     *
     * >  This parameter is returned only if the value of `RemediationType` is `Analysis`.
     * @example UnusedAccessKeyInRamUser
     *
     * @var string
     */
    public $classification;

    /**
     * @description The fixing cost.
     *
     * @var string
     */
    public $costDescription;

    /**
     * @description The description of the fixing item.
     *
     * >  This parameter is returned only if the value of `RemediationType` is `Analysis`.
     * @var string
     */
    public $description;

    /**
     * @description The content of the fixing items.
     *
     * @var guidance[]
     */
    public $guidance;

    /**
     * @description The usage notes of the fixing item.
     *
     * @var string
     */
    public $notice;

    /**
     * @description The fixing suggestion.
     *
     * >  This parameter is returned only if the value of `RemediationType` is `Analysis`.
     * @var string
     */
    public $suggestion;
    protected $_name = [
        'classification'  => 'Classification',
        'costDescription' => 'CostDescription',
        'description'     => 'Description',
        'guidance'        => 'Guidance',
        'notice'          => 'Notice',
        'suggestion'      => 'Suggestion',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['Guidance'] = [];
            if (null !== $this->guidance && \is_array($this->guidance)) {
                $n = 0;
                foreach ($this->guidance as $item) {
                    $res['Guidance'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return actions
     */
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
                $n               = 0;
                foreach ($map['Guidance'] as $item) {
                    $model->guidance[$n++] = null !== $item ? guidance::fromMap($item) : $item;
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
