<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\GetDataQualityRuleTemplateResponseBody\dataQualityRuleTemplate;

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
