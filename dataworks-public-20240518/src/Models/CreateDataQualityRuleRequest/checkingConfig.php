<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataQualityRuleRequest;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataQualityRuleRequest\checkingConfig\thresholds;
use AlibabaCloud\Tea\Model;

class checkingConfig extends Model
{
    /**
     * @description The method that is used to query the referenced samples. To obtain some types of thresholds, you need to query reference values. In this example, an expression is used to specify the query method of referenced samples.
     *
     * @example { "bizdate": [ "-1", "-7", "-1m" ] }
     *
     * @var string
     */
    public $referencedSamplesFilter;

    /**
     * @description The threshold settings.
     *
     * @var thresholds
     */
    public $thresholds;

    /**
     * @description The method that is used to calculate a threshold. You can leave this parameter empty if you use a rule template. Valid values:
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
        'thresholds'              => 'Thresholds',
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
        if (null !== $this->thresholds) {
            $res['Thresholds'] = null !== $this->thresholds ? $this->thresholds->toMap() : null;
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
        if (isset($map['Thresholds'])) {
            $model->thresholds = thresholds::fromMap($map['Thresholds']);
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
