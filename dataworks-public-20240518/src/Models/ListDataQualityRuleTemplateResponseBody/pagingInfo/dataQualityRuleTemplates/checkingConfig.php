<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ListDataQualityRuleTemplateResponseBody\pagingInfo\dataQualityRuleTemplates;

use AlibabaCloud\Tea\Model;

class checkingConfig extends Model
{
    /**
     * @description The method that is used to query the referenced samples. To obtain some types of thresholds, you need to query reference samples and perform aggregate operations on the reference values. In this example, an expression is used to indicate the query method of referenced samples.
     *
     * @example { "bizdate": [ "-1", "-7", "-1m" ] }
     *
     * @var string
     */
    public $referencedSamplesFilter;

    /**
     * @description The threshold calculation method. Valid values:
     *
     *   Fixed
     *   Fluctation
     *   FluctationDiscreate
     *   Auto
     *   Average
     *   Variance
     *
     * @example Fixed
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'referencedSamplesFilter' => 'ReferencedSamplesFilter',
        'type'                    => 'Type',
    ];

    public function validate()
    {
    }

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
