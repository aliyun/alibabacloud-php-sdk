<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityRuleTemplatesResponseBody\pagingInfo\dataQualityRuleTemplates;

use AlibabaCloud\Tea\Model;

class checkingConfig extends Model
{
    /**
     * @description Some types of thresholds need to query some reference samples, and then summarize the values of the reference samples to obtain the threshold for comparison. Here, an expression is used to represent the query method of the reference samples.
     *
     * @example { "bizdate": [ "-1", "-7", "-1m" ] }
     *
     * @var string
     */
    public $referencedSamplesFilter;

    /**
     * @description Threshold Calculation method
     * - Fixed
     * - Fluctation
     * - FluctationDiscreate
     * - Auto
     * - Average
     * - Variance
     *
     * @example Fixed
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'referencedSamplesFilter' => 'ReferencedSamplesFilter',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->referencedSamplesFilter) {
            $res['ReferencedSamplesFilter'] = $this->referencedSamplesFilter;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return checkingConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReferencedSamplesFilter'])) {
            $model->referencedSamplesFilter = $map['ReferencedSamplesFilter'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
