<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DataQualityResult\rule;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\DataQualityResult\rule\checkingConfig\thresholds;
use AlibabaCloud\Tea\Model;

class checkingConfig extends Model
{
    /**
     * @example { "bizdate": [ "-1", "-7", "-1m" ] }
     *
     * @var string
     */
    public $referencedSamplesFilter;

    /**
     * @var thresholds
     */
    public $thresholds;

    /**
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
